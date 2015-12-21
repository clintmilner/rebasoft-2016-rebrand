/**
 * User: clint
 * Date: 18/12/2015
 * Time: 12:02
 *
 * Rebasoft - Network Intelligence
 */

var gulp = require( 'gulp' );
var less = require( 'gulp-less' );
var autoprefixer = require( 'gulp-autoprefixer' );
var minifyCss = require( 'gulp-minify-css' );
var concat = require( 'gulp-concat' );
var uglify = require( 'gulp-uglify' );

var masterLess = 'builder/less/master.less';
var cssTarget = 'static/css';
var jsTarget = 'static/js';

var bsLess = [ 'builder/less/*.less' ],
    //bsJS = [ 'builder/js/tooltip.js', 'builder/js/*.js' ]; // tooltip.js needs to be loaded first
    bsJS = [ 'builder/js/collapse.js', 'builder/js/carousel.js', 'builder/js/rs-scripts.js' ]; // maybe just add the stuff we're using...

    gulp.task('build-less', function() {
        gulp.src(masterLess)
            .pipe(less())
            .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
            .pipe(minifyCss({keepBreaks: true}))
            .pipe(gulp.dest(cssTarget));

        console.log('Finished compiling LESS files to ' + cssTarget);
    });

    gulp.task( 'build-js', function(){
        gulp.src( bsJS )
            .pipe( concat( 'scripts.js' ) )

            .pipe( gulp.dest( jsTarget ) );

        console.log( 'Finished compiling Bootstrap JS' );
    });

    gulp.task( 'watch', function(){
       gulp.watch( bsLess, [ 'build-less' ] );
       gulp.watch( bsJS, [ 'build-js' ] );
    });

    gulp.task( 'default', ['build-less', 'build-js', 'watch'] );