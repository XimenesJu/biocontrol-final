const gulp 			= require("gulp"),
	  plumber 		= require("gulp-plumber"),
	  concat 		= require("gulp-concat"),
	  sass 			= require("gulp-sass"),
	  header 		= require("gulp-header"),
	  autoprefixer 	= require("gulp-autoprefixer"),
	  cleanCss 		= require("gulp-clean-css"),
	  babel 		= require("gulp-babel"),
	  imagemin 		= require("gulp-imagemin"),
	  browserSync 	= require("browser-sync").create(),
	  changed 		= require("gulp-changed"),
	  fs			= require("fs");

const babelConfig = {
	presets: [
		'minify',
		'@babel/preset-env'
	]
}

// PROJECT PATHS
// ======================================================

const paths = {};
	  paths.directory = 'biocontrol-remake/';
	  paths.dist  	  = './dist';
	  paths.src  	  = './src';
	  paths.css		  = paths.src + '/assets/css';
	  paths.scss 	  = paths.src + '/assets/scss';
	  paths.js		  = paths.src + '/assets/js';
	  paths.images 	  = paths.src + '/assets/images';
	  paths.fonts 	  = paths.src + '/assets/fonts';
	  paths.views 	  = paths.src + '/views';

// DEV CREDITS
const devCredits = fs.readFileSync('./src/assets/credits.txt', 'utf-8');


function initBrowserSync(done) {
	browserSync.init({
		proxy: 'http://localhost/',
		port: 3000,
		notify: false
	});

	done();
}

function browserSyncReload(done) {
	browserSync.reload();
	done();
}

function css() {

	let files = [
		'node_modules/animate.css/animate.min.css',
		paths.js +'vendors/**/*.css',
		paths.scss +'/**/*.scss'
	]

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(sass.sync())
		.pipe(concat('style.min.css'))
		.pipe(autoprefixer())
		.pipe(cleanCss({level: { 1: { specialComments: 0 } }}))
		.pipe(header(devCredits))
		.pipe(gulp.dest("./dist/assets/css/"))
		.pipe(gulp.dest('../laravel/public/assets/css/'))
		.pipe(browserSync.stream());
}

function mainJs() {

	let files = [
		paths.js + '/**/*.js'
	]

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(changed('./dist/assets/js', { extension: '.js' }))
		.pipe(babel(babelConfig))
		.pipe(concat('scripts.min.js'))
		.pipe(header(devCredits))
		.pipe(gulp.dest('./dist/assets/js'))
		.pipe(gulp.dest('../laravel/public/assets/js'))
		.on('error', (err) => console.log(err.message));
}

function jsBase() {

	let files = [
		'node_modules/jquery/dist/jquery.min.js',
		'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
		'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js',
		'node_modules/jquery-validation/dist/jquery.validate.min.js',
		paths.js +'/vendors/**/*.js'
	]

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(changed('./dist/assets/js', { extension: '.js' }))
		.pipe(concat('libraries.min.js'))
		.pipe(gulp.dest('./dist/assets/js'))
	 	.pipe(gulp.dest('../laravel/public/assets/js'))
		.on('error', (err) => console.log(err.message));
}

function jsPlugins() {

	let files = [
		// JS files
		'node_modules/owl.carousel/dist/owl.carousel.min.js',
		'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js',

		// CSS files
		'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
		'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
		'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
	]

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(gulp.dest('./dist/assets/js/vendors/'))
		.pipe(gulp.dest('../laravel/public/assets/js/vendors/'));
}

function views() {

	let files = [paths.views +'/**/*.php']

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(changed('./dist', { extension: '.php' }))
		.pipe(gulp.dest('./dist'))
		.on('error', (err) => console.error(err.message))

}

function images() {

	return gulp
		.src(paths.images +"/**/*")
		.pipe(changed("./dist/assets/images"))
		.pipe(plumber())
		.pipe(
			imagemin([
				imagemin.gifsicle({ interlaced: true }),
				imagemin.jpegtran({ progressive: true }),
				imagemin.optipng({ optimizationLevel: 6 }),
				imagemin.svgo({
					plugins: [
						{
							removeXMLProcInst: true,
							removeViewBox: false,
							collapseGroups: true
						}
					]
				})
			])
		)
		.pipe(gulp.dest("./dist/assets/images"))
		.pipe(gulp.dest('../laravel/public/assets/images/'))
}

function fonts() {

	let files = [paths.fonts +'/**/**']

	return gulp
		.src(files)
		.pipe(plumber())
		.pipe(changed('./dist/assets/fonts'))
		.pipe(gulp.dest('./dist/assets/fonts'))
		// .pipe(gulp.dest('../laravel/public/assets/fonts/'))
		.on('error', (err) => console.error(err.message));

}

function watchFiles() {

	gulp.watch(paths.scss +"/**/*", css);
	gulp.watch(paths.js +"/**/*", gulp.series(mainJs, browserSyncReload));
	gulp.watch(paths.images +"/**/*", gulp.series(images, browserSyncReload));
	gulp.watch(paths.fonts +"/**/*", gulp.series(fonts, browserSyncReload));
	gulp.watch(paths.views +"/**/*", gulp.series(views, browserSyncReload));
}


// Tasks
// ========
gulp.task("css", css);
gulp.task("mainJs", mainJs);
gulp.task("jsBase", jsBase);
gulp.task("jsPlugins", jsPlugins);
gulp.task("views", views);
gulp.task("images", images);
gulp.task("fonts", fonts);

gulp.task("default",

	gulp.series(
		// compilating files when gulp starts
		"css",
		"views",
		"images",
		"fonts",
		"mainJs",
		"jsBase",
		"jsPlugins",
		// starting liveReload and watchers
		gulp.parallel(initBrowserSync, watchFiles)
	)

);