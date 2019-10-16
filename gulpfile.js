const gulp = require("gulp"),
      sass = require("gulp-sass"),
      postcss = require("gulp-postcss"),
      autoprefixer = require("autoprefixer"),
      cssnano = require("cssnano"),
      sourcemaps = require("gulp-sourcemaps");

var paths = {
  styles: {
      src: "assets/scss/*.scss",
      dest: "assets/css"
  }
};
	
function style() {
  return (
      gulp
          .src(paths.styles.src)
          .pipe(sourcemaps.init())
          .pipe(sass())
          .on("error", sass.logError)
          .pipe(postcss([autoprefixer(), cssnano()]))
          .pipe(sourcemaps.write())
          .pipe(gulp.dest(paths.styles.dest))
          //.pipe(browserSync.stream())
  );
}

function watch(){
  gulp.watch(paths.styles.src, style)
}

// $ gulp watch
exports.watch = watch

// $ gulp style
exports.style = style;