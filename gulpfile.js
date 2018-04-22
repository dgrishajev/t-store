'use strict';

var gulp       = require('gulp'),
    phpTask    = require('./_gulp-config/php-task'),
    stylesTask = require('./_gulp-config/style-task'),
    fontTask   = require('./_gulp-config/font-task'),
    imgTask    = require('./_gulp-config/img-task'),
    jsTask     = require('./_gulp-config/js-task'),
    watchTask  = require('./_gulp-config/watch-task');

gulp.task('php', phpTask);

gulp.task('style', stylesTask);

gulp.task('font', fontTask);

gulp.task('img', imgTask);

gulp.task('js', jsTask);

gulp.task('build', [
  // 'php',
  'style',
  'font',
  'img',
  'js'
]);

gulp.task('watch', watchTask);

gulp.task('default', ['build', 'watch']);