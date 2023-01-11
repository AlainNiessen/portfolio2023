const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
const minCss = require('gulp-clean-css');
const rename = require('gulp-rename');
const uglify = require('gulp-terser');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');


//function that compile scss into css
function scss () {
    return gulp

    // 1. where is my scss file?
        .src('./src/scss/screen.scss')

    // 2. pass that file through the sass compiler
        .pipe(sass())

    // 3. Prefix css with autoprefixer
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))

    // 4. in case of error, it will only show the exact error
        .on('error', sass.logError)    

    // 5.where do I save the compiled css? Lisible!
        .pipe(gulp.dest('./src/css'))    

    // 6. minimize css
        .pipe(minCss())

    // 7. rename
        .pipe(rename({ prefix: 'min-' }))    
    
    // 8.where do I save the minimalized css?
        .pipe(gulp.dest('./dist/css'))

    // 9. stream changes to all browsers / syncronize everything between different browsers / update css without refreshing browser
        .pipe(browserSync.stream());
}

//function that concat and minimalize JS
function compress () {
    return gulp

    // 1. where is my js file?
        .src('./src/js/**/*.js')

    // 2.Concat all js files to one file
        .pipe(concat('all.js'))        

    // 3. minify 
        .pipe(uglify())  
        
    // 4. rename
        .pipe(rename({ prefix: 'min-' }))    
    
    // 5.where do I save the minimalized concat js?
        .pipe(gulp.dest('./dist/js'))

    // 6. stream changes to all browsers / syncronize everything between different browsers / update css without refreshing browser
        .pipe(browserSync.stream());

}


//watching and updating automatically
function watch () {
    browserSync.init ({
        //set up the server
        server: {
            baseDir: './'
        }
    });
    //watching for changes
    gulp.watch('./src/scss/**/*.scss', scss); //compiling automatically    
    gulp.watch('./*.html').on('change', browserSync.reload); // refresh browser
    gulp.watch('./src/js/**/*.js', compress); //watching for every change in all js-files and execute function compress automatically
}

//Exporting all functions
exports.scss = scss;
exports.compress = compress;
exports.watch = watch;
