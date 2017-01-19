const gulp = require('gulp');
const pug = require('gulp-pug');
const stylus = require('gulp-stylus');


/**
 * Main tasks
 */

gulp.task('views', () => {
    return gulp.src('src/views/*.pug')
        .pipe(pug({}))
        .pipe(gulp.dest('./dist/'));
});


gulp.task('styles', () => {
    return gulp.src('src/styles/main.styl')
        .pipe(stylus())
        .pipe(gulp.dest('./dist/styles'));
});

gulp.task('libs', () => {
    return gulp.src('src/libs/*')
        .pipe(gulp.dest('./dist/libs'));
});

gulp.task('scripts', () => {
    return gulp.src('src/scripts/*.js')
        .pipe(gulp.dest('./dist/scripts'));
});

gulp.task('images', () => {
    return gulp.src('src/images/*')
        .pipe(gulp.dest('./dist/images'));
});

gulp.task('fonts', () => {
    return gulp.src('src/fonts/*')
        .pipe(gulp.dest('./dist/fonts'));
});


/**
 * Default tasks
 */

gulp.task('default', ['views', 'styles', 'scripts', 'images', 'fonts', 'libs']);

gulp.task('dev', () => {

    const pugWatcher = gulp.watch('src/views/*.pug', ['views']);
    const stylusWatcher = gulp.watch('src/styles/*.styl', ['styles']);
    const scriptsWatcher = gulp.watch('src/scripts/*.js', ['scripts']);
    const imagesWatcher = gulp.watch('src/views/*', ['images']);
    const fontsWatcher = gulp.watch('src/fonts/*', ['fonts']);
    const libsWatcher = gulp.watch('src/libs/*', ['libs']);

    pugWatcher.on('change', handleFileChange);
    stylusWatcher.on('change', handleFileChange);
    scriptsWatcher.on('change', handleFileChange);
    imagesWatcher.on('change', handleFileChange);
    fontsWatcher.on('change', handleFileChange);
    libsWatcher.on('change', handleFileChange);
})


/**
 * Utils
 */

const handleFileChange = function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
}
