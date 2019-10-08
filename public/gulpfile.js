const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

function style() {
    //where is my sass file
    return gulp.src('./sass/**/*.sass')
    //console any error. Fix for terminal
    .pipe(sass().on('error', sass.logError))
    //pass that file through sass compiler
    .pipe(sass())
    //where do I save the compiled css
    .pipe(gulp.dest('./css'))
    // 4. stream changes to all browser
    .pipe(browserSync.stream());
}
function watch() {
    browserSync.init({
        proxy: 'http://localhost'
    });
    gulp.watch('./sass/**/*.sass', style);
    gulp.watch('./**/*.html').on('change', browserSync.reload);
    gulp.watch('./**/*.js').on('change', browserSync.reload);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
}
exports.style = style;
exports.watch = watch;