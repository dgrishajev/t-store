var gulp       = require('gulp'),
    livereload = require('gulp-livereload'),
    notify     = require('gulp-notify'),
    path       = require('./path');


module.exports = function () {
  gulp.src(path.src.php)
    .pipe(livereload())
    .pipe(notify({ message: 'PHP task complete', onLast: true }));
};