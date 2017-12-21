// Grants access to package.json file content
const pkg = require('./package.json');

// Requires Gulp so we can do Gulp-y things
var gulp = require('gulp');

// Allows the invocation of plugins via '$.pluginName()'
const $ = require('gulp-load-plugins')({
  pattern: ['*'],
  scope: ['devDependencies']
});

// Allows "fancy" logging of console messages
var fancyLog = require('fancy-log');

// On error, log an error.
const onError = (err) => {
  fancyLog(err);
};

const banner = [
  "/**",
  " * @project        <%= pkg.name %>",
  " * @author         <%= pkg.author %>",
  " * @build          " + $.moment().format("llll") + " ET",
  " * @release        " + $.gitRevSync.long() + " [" + $.gitRevSync.branch() + "]",
  " * @copyright      Copyright (c) " + $.moment().format("YYYY") + ", <%= pkg.copyright %>",
  " *",
  " */",
  ""
].join("\n");

// scss - builds the scss to its dist folder with a sourcemap
gulp.task('scss', () => {
  fancyLog('-> Compiling SCSS');
  return gulp.src(pkg.paths.assets.styles.src + pkg.vars.scssName)
    .pipe($.plumber({ errorHandler: onError }))
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass({
        includePaths: pkg.paths.scss
      })
      .on("error", $.sass.logError))
    .pipe($.cached("sass_compile"))
    .pipe($.autoprefixer())
    .pipe($.sourcemaps.write("./"))
    .pipe($.size({ gzip: true, showFiles: true }))
    .pipe(gulp.dest(pkg.paths.assets.styles.dist));
});

// css task - combine & minimize any distribution CSS into the public css folder, and add our banner to it
gulp.task("css", ["scss"], () => {
  fancyLog("-> Building CSS");
  return gulp.src(pkg.globs.distCSS)
    .pipe($.plumber({ errorHandler: onError }))
    .pipe($.newer({ dest: pkg.paths.assets.styles.dist + pkg.vars.siteCSSName }))
    .pipe($.print())
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.concat(pkg.vars.siteCSSName))
    .pipe($.cssnano({
      discardComments: {
        removeAll: true
      },
      discardDuplicates: true,
      discardEmpty: true,
      minifyFontValues: true,
      minifySelectors: true
    }))
    .pipe($.header(banner, { pkg: pkg }))
    .pipe($.sourcemaps.write("./"))
    .pipe($.size({ gzip: true, showFiles: true }))
    .pipe(gulp.dest(pkg.paths.assets.styles.dist))
    .pipe($.filter("**/*.css"))
    .pipe($.livereload());
});

// babel js - transpiles javascript
gulp.task('js-babel', () => {
  fancyLog('-> Transpiling Javascript via Babel...');
  return gulp.src(pkg.globs.babelJS)
    .pipe($.plumber({ errorHandler: onError }))
    .pipe($.newer({ dest: pkg.paths.assets.scripts.src }))
    .pipe($.babel())
    .pipe($.size({ gzip: true, showFiles: true }))
    .pipe(gulp.dest(pkg.paths.assets.scripts.dist));
});

// js task - minimize any distribution JS and add our banner
gulp.task('js', ['js-babel'], () => {
  fancyLog('-> Building JS');
  return gulp.src(pkg.globs.distJS)
    .pipe($.plumber({ errorHandler: onError }))
    .pipe($.if(['*.js', '!*.min.js'],
      $.newer({ dest: pkg.paths.assets.scripts.dist, ext: '.min.js' }),
      $.newer({ dest: pkg.paths.assets.scripts.dist })
    ))
    .pipe($.if(["*.js", "!*.min.js"],
      $.uglify()
    ))
    .pipe($.if(["*.js", "!*.min.js"],
      $.rename({ suffix: ".min" })
    ))
    .pipe($.header(banner, { pkg: pkg }))
    .pipe($.size({ gzip: true, showFiles: true }))
    .pipe(gulp.dest(pkg.paths.assets.scripts.dist))
    .pipe($.filter('**.*.js'))
    .pipe($.livereload());
});

// imagemin task
gulp.task("imagemin", () => {
  return gulp.src(pkg.paths.assets.images.src + "**/*.{png,jpg,jpeg,gif,svg}")
    .pipe($.imagemin({
      progressive: true,
      interlaced: true,
      optimizationLevel: 7,
      svgoPlugins: [{ removeViewBox: false }],
      verbose: true,
      use: []
    }))
    .pipe(gulp.dest(pkg.paths.assets.images.dist));
});

// Default task
gulp.task('default', ['scss', 'js'], () => {
  $.livereload.listen();
  gulp.watch([pkg.paths.assets.styles.src + '**/*.scss'], ['css']);
  gulp.watch([pkg.paths.assets.styles.src + '**/*.css'], ['css']);
  gulp.watch([pkg.paths.assets.scripts.src + '**/*.js'], ['js']);
});

// Production build
gulp.task('build', ['default', 'imagemin']);