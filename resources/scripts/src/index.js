'use strict';

/**
 * Imports SCSS for Webpack parsing and sets strict mode
 */
import '../../styles/src/index.scss';

/**
 * Vendor libraries and plugin settings
 */
import './vendor/dialog-polyfill';
import './vendor/lazysizes';
import './vendor/smoothscroll-polyfill';


/**
 * Module libraries
 */
import './modules/homepage';
import './modules/site-wide';
import './modules/solutionsLandingPage';