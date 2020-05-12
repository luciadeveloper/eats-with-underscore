require('es6-promise').polyfill();
var less = require('gulp-less');
var path = require('path');
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('less', function () {
  return gulp.src('./less/style.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(autoprefixer('last 10 versions', 'ie 9'))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch('./**/*.*', ['less']);
});

gulp.task('default', ['less', 'watch']);