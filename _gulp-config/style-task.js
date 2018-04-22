var gulp       = require('gulp'),
    plumber    = require('gulp-plumber'),
    sourcemaps = require('gulp-sourcemaps'),
    sass       = require('gulp-sass')
    cssmin     = require('gulp-clean-css'),
    livereload = require('gulp-livereload'),
    notify     = require('gulp-notify')
    path       = require('./path');


module.exports = function () {
  gulp.src(path.src.style.path)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sass({
      includePaths: path.src.style.includePaths,
      outputStyle: 'compressed',
      sourceMap: true,
      errLogToConsole: true
    }))
    .pipe(cssmin())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.build.css))
    .pipe(livereload())
    .pipe(notify({ message: 'Style task complete', onLast: true }));
};