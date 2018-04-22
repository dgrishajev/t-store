var gulp       = require('gulp'),
    livereload = require('gulp-livereload');
    watch      = require('gulp-watch'),
    path       = require('./path');


module.exports = function () {

  livereload.listen();

  // watch([path.watch.php], function(event, cb) {
  //   gulp.start('php');
  // });
  watch([path.watch.style], function(event, cb) {
    gulp.start('style');
  });
  watch([path.watch.font], function(event, cb) {
    gulp.start('font');
  });
  watch([path.watch.img], function(event, cb) {
    gulp.start('img');
  });
  watch([path.watch.js], function(event, cb) {
    gulp.start('js');
  });

};