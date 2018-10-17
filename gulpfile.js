var gulp         = require('gulp');
var	rename       = require('gulp-rename');
var	postcss      = require('gulp-postcss');
var changed      = require('gulp-changed');
var imagemin     = require('gulp-imagemin');
var	assets       = require('postcss-assets');
var	nested       = require('postcss-nested');
var	short        = require('postcss-short');
var concat       = require('gulp-concat');
var	uglify       = require('gulp-uglify');
var	cssnano      = require('gulp-cssnano');
var	cssnext      = require('postcss-cssnext');
var	autoprefixer = require('gulp-autoprefixer');
var	sass         = require('gulp-sass');
var notify       = require('gulp-notify');
var browserSync  = require('browser-sync');

gulp.task('browser-sync', function() {
	browserSync({
		proxy: 
		"stellar.rus",
		notify: false
	
	});
});
gulp.task('sass', function() {
		var processors = [
			short,
			nested,
			cssnext,
			// assets({
			// 	loadPaths: ['assets/templates/Stas/app/'],
			// 	relativeTo: 'assets/templates/Stas/app/css/'
			// })
		];
	return gulp.src('catalog/view/theme/default/assets/stylesheet/sass/**/*.sass')
	.pipe(sass().on("error", notify.onError()))
	.pipe(postcss(processors))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({
    browsers: ['last 12 versions'],
    cascade: false
    }))
	.pipe(cssnano())
	.pipe(gulp.dest('catalog/view/theme/default/assets/stylesheet'))
	.pipe(browserSync.reload({stream: true}));
});
gulp.task('libs', function() {
	return gulp.src([
		// 'assets/templates/Stas/app/js/jquery.min.js',
		// 'assets/templates/Stas/app/js/bootstrap.min.js',
		// 'assets/templates/Stas/app/js/popper.min.js',
		// 'assets/templates/Stas/app/js/common.js'
		])
		.pipe(concat('libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('catalog/view/theme/default/assets/js'));
});
gulp.task('watch', ['sass', 'libs','browser-sync'], function() {
	gulp.watch('catalog/view/theme/default/assets/stylesheet/sass/**/*.sass', ['sass']);
	gulp.watch('*.php', browserSync.reload);
});

gulp.task('imagemin', function() {
   var imgSrc = 'catalog/**/*.+(png|jpg|gif)',
   imgDst = 'build/images';
   
   gulp.src(imgSrc)
   .pipe(changed(imgDst))
   .pipe(imagemin())
   .pipe(gulp.dest(imgDst));
});



gulp.task('default', ['watch', 'sass']);
