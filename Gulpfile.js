const gulp = require('gulp');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const php = require('gulp-connect-php');
const browserSync = require('browser-sync').create();

const cssFiles = 'assets/css/*.css';

function processCSS() {
  return (
    gulp
      .src(cssFiles)
      .pipe(sourcemaps.init())
      .pipe(cleanCSS())
      .pipe(autoprefixer({ browsers: ['last 2 versions'], cascade: false }))
      .pipe(concat('main.css'))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('build'))

      // live reload
      .pipe(browserSync.stream())
  );
}

function watchCSS() {
  return gulp.watch(cssFiles, gulp.series(processCSS));
}

const phpFiles = './**/*.php';

function watchPHP() {
  return gulp.watch(phpFiles, browserSync.reload);
}

function phpServerInit() {
  // uses port 8000, browser-sync will proxy it on 9000
  php.server({ base: './', port: 8000, keepalive: true });

  startLocalhost();
}

function startLocalhost() {
  watchCSS();

  // need to resolve some issues with watching PHP files
  // watchPHP();

  browserSync.init({
    proxy: 'localhost:8000',
    port: 9000,
    baseDir: './',
    open: true,
    notify: false
  });
}

function devStart(done) {
  gulp.series(processCSS, phpServerInit, startLocalhost)(done);
}

gulp.task(devStart);
