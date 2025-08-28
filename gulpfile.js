import gulp from "gulp";
import sass from "gulp-sass";
import dartSass from "sass";
import cleanCSS from "gulp-clean-css";
import rename from "gulp-rename";
import sourcemaps from "gulp-sourcemaps";
import autoprefixer from "gulp-autoprefixer";
import browserSync from "browser-sync";

const sassCompiler = sass(dartSass);

const paths = {
  scss: "src/scss/**/*.scss",
  cssDest: "dist/css"
};

// Компиляция SCSS
export function styles() {
  return gulp.src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sassCompiler().on("error", sassCompiler.logError))
    .pipe(autoprefixer({ cascade: false }))
    .pipe(sourcemaps.write())               // Сохраняем source map для обычного CSS
    .pipe(gulp.dest(paths.cssDest))         // <-- BrowserSync работает с этой версией
    .pipe(browserSync.stream())             // горячее обновление
    .pipe(cleanCSS())                        // минификация
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.cssDest));        // сохраняем минифицированную версию
}

// Watch + BrowserSync
export function watch() {
  browserSync.init({ server: { baseDir: "./" } });
  gulp.watch(paths.scss, styles);
  gulp.watch("./*.html").on("change", browserSync.reload);
  gulp.watch("src/js/**/*.js").on("change", browserSync.reload);
}

export default gulp.series(styles, watch);
