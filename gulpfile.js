const gulp = require('gulp');
var svgSprite = require("gulp-svg-sprites");
 
gulp.task('sprites', function () {
    return gulp.src('svg/*.svg')
        .pipe(svgSprite())
        .pipe(gulp.dest("assets"));
});