import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin'; //using 7.1 to prevent errors



const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
    dest: 'dist/assets/css'
  },
  images: {
    src: 'src/assets/images/**/*.*',
    dest: 'dist/assets/images'
  }
}

export const styles = () => {

  let sass = require('gulp-sass')(require('sass'));
 
 

  return gulp.src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest));
}

export const imagesmin = () => {

  return gulp.src(paths.images.src)
      .pipe(gulpif(PRODUCTION, imagemin()))
      .pipe(gulp.dest(paths.images.dest));
}



export const watch = () => {
  gulp.watch( 'src/assets/scss/**/*.scss', styles);
}



// exports.default = hello;