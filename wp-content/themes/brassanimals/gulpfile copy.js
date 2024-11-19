const gulp = require('gulp');
const {src, dest} = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const sourcemaps = require('gulp-sourcemaps');
const gulpif = require('gulp-if');
const yargs = require('yargs');
const PROD = yargs.argv.prod;

gulp.task("sass", function() {
  return src('assets/sass/main.scss')
    .pipe(gulpif(!PROD, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(!PROD, sourcemaps.write()))
    .pipe(dest('assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', function(){
  browserSync.init({
    proxy: {
      target: "localhost/voice"
    }
  });
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('assets/sass/**/*.scss', gulp.series('sass'));
});