'use strict';

/**
 * Imports SCSS for Webpack parsing and sets strict mode
 */
require('../../styles/src/index.scss');

/**
 * Vendor libraries and plugin settings
 */
require('./vendor/dialog-polyfill');
require('./vendor/lazysizes');
require('./vendor/slick-carousel');
require('./vendor/smoothscroll-polyfill');

/**
 * Module libraries
 */
require('./modules/drawer-menu');