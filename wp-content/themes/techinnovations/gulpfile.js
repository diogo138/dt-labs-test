const gulp = require("gulp");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");

// Caminhos dos arquivos
const paths = {
  css: "!assets/css/**/style.css",
  css: "assets/css/**/*.css",
  js: "assets/js/**/*.js",
};

// Tarefa para minificar e concatenar CSS
function minifyCSS() {
  return gulp
    .src(paths.css)
    .pipe(concat("style.min.css"))
    .pipe(cleanCSS())
    .pipe(gulp.dest("assets/dist/css"));
}

// Tarefa para minificar e concatenar JS
function minifyJS() {
  return gulp
    .src(paths.js)
    .pipe(concat("script.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("assets/dist/js"));
}

// Tarefa padrão para executar ambas as tarefas
exports.default = gulp.series(minifyCSS, minifyJS);
