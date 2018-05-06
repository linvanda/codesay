let gulp = require('gulp');
let sass = require("gulp-sass");
let css_minify = require('gulp-minify-css');
let uglify = require('gulp-uglify');

gulp.task('css', function() {
    gulp
        .src('public/css/src/**/*.scss')
        .pipe(sass({ includePaths: ['public/css/src/'] }))
        .pipe(css_minify())
        .pipe(gulp.dest('public/css/dist/'));
});
gulp.task('js', function() {
    gulp.src('public/js/src/**/*.js').pipe(uglify()).pipe(gulp.dest('public/js/dist/'));
});

gulp.task('default', ['css', 'js']);

gulp.task('watch', function() {
    gulp.watch(['public/css/src/**'], ['css']);
    gulp.watch(['public/js/src/**'], ['js']);
});
