const gulp = require('gulp');
const sass = require('gulp-sass');
const fibers = require('fibers');
const sassGlob = require("gulp-sass-glob");
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
sass.compiler = require('sass');

gulp.task('sass', function () {
	return gulp.src('./assets/sass/**/*.scss')
		.pipe(plumber({
			errorHandler: notify.onError("Error: <%= error.message %>")
		}))
		.pipe(sassGlob())
		.pipe(sass({
			style: 'expanded',
			fiber: fibers
		}))
		.pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function () {
	gulp.watch('./assets/sass/**/*.scss', gulp.task('sass'));
});
