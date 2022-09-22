const { src, dest, watch, series, parallel } = require('gulp');
var bs = require('browser-sync').create();
const sass = require('gulp-sass')(require('node-sass'));
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const webpack = require('webpack-stream');
var rename = require('gulp-rename');

const files = {
  sassPath: 'src/sass/*.sass',
  phpPath: '*.php',
  jsPath: 'src/*.js',
};

function serve(done) {
  bs.init({
    proxy: 'localhost:8888',
  });
  done();
}

function reload(done) {
  bs.reload();
  done();
}

function sassTask() {
  return src(files.sassPath)
    .pipe(sass()) // compile SCSS to CSS
    .pipe(postcss([autoprefixer(), cssnano()])) // PostCSS plugins
    .pipe(rename('main.css'))
    .pipe(dest('assets/css/')); // put final CSS in dist folder
}
function jsTask() {
  return src('src/main.js').pipe(webpack()).pipe(dest('assets/js'));
}

function watchTask() {
  // watch([files.scssPath, files.jsPath],
  watch([files.phpPath, files.sassPath, files.jsPath], series(sassTask, jsTask, reload));
}

exports.default = series(sassTask, jsTask, serve, watchTask);

exports.sass = sassTask;
