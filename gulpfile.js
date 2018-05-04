let gulp = require('gulp');
let sass = require("gulp-sass");

gulp.task('default', function() {
    gulp.src('public/css/src/**/*.scss').pipe(sass()).pipe(gulp.dest('public/css/dist/'));
});
