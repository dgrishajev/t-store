var gulp       = require('gulp'),
    plumber    = require('gulp-plumber'),
    livereload = require('gulp-livereload'),
    path       = require('./path');


module.exports = function () {
  gulp.src(path.src.font)
    .pipe(plumber())
    .pipe(gulp.dest(path.build.font))
    .pipe(livereload())
    .pipe(notify({ message: 'Font task complete', onLast: true }));
};