var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    plumber = require('gulp-plumber');

// Sass Source
var scssFilesToWatch = './assets/scss/*.scss',
    scssFilesToCompress = './assets/scss/*.scss',
    scssMainFile = './assets/scss/style.scss',
    cssDest = './assets/css';

var sassDevOptions = {
  style: 'compressed',
  outputStyle: 'compressed',
  errLogToConsole: true,
  sourceComments: 'normal'
}
var sassProdOptions = {
  outputStyle: 'compressed'
}

// Task 'sassdev' - Run with command 'gulp sassdev'
gulp.task('sassdev', function() {
  console.log(">>> SASS DEV <<<");
  return gulp.src(scssFilesToCompress)
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass(sassDevOptions))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write())
    .pipe(plumber.stop())
    .pipe(gulp.dest(cssDest));
});

// Task 'sassprod' - Run with command 'gulp sassprod'
gulp.task('build-dist', function() {
  return gulp.src(scssFilesToCompress)
    .pipe(plumber())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sass(sassProdOptions))
    .pipe(plumber.stop())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(cssDest));
});

// Task 'watch' - Run with command 'gulp watch'
gulp.task('watch', function() {
  gulp.watch(scssFilesToWatch, ['sassdev']);
});

// Default task - Run with command 'gulp'
gulp.task('default', ['sassdev', 'watch']);
