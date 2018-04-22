var gulp       = require('gulp'),
    plumber    = require('gulp-plumber'),
    livereload = require('gulp-livereload'),
    notify     = require('gulp-notify'),
    path       = require('./path');


module.exports = function () {
  gulp.src(path.src.img)
    .pipe(plumber())
    .pipe(gulp.dest(path.build.img))
    .pipe(livereload())
    .pipe(notify({ message: 'Image task complete', onLast: true }));
};