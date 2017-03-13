let gulp = require('gulp');
let browserSync = require('browser-sync').create();
/*
gulp.task('serve', ['sass'], function(){
    browserSync.init({
        proxy : 'http://localhost:8888/Skator'
    });
    
    gulp.watch('./sass/**//*.scss', ['sass']);
    gulp.watch('./**//*.php').on('change', browserSync.reload);
});
*/

gulp.task('browserSync', function() {
   browserSync.init({
        proxy : 'http://localhost:8888/Skator'
    });
})

gulp.task('watch',['browserSync'], function(){
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    gulp.watch('./**/*.css').on('change', browserSync.reload);
    gulp.watch('./**/*./js').on('change', browserSync.reload);

})