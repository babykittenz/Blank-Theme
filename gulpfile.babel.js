import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';




const PRODUCTION = yargs.argv.prod;

export const styles = () => {

  var sass = require('gulp-sass')(require('sass'));

  return gulp.src('src/assets/scss/bundle.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/assets/css'));
}



// exports.default = hello;