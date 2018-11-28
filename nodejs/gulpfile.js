//导入工具包 require('node_modules里对应模块')
var gulp = require('gulp'), //本地安装gulp所用到的地方
    less = require('gulp-less');
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber');
    sourcemaps = require('gulp-sourcemaps');

gulp.task('testLess', function () {
    gulp.src('src/less/index.less') //此任務針對的文件
        .pipe(less()) //此任務調用的模組
        .pipe(gulp.dest('src/css')); //會在src/css下生成index.css
});

gulp.task('testLess1', function () {
    gulp.src(['src/less/index.less','src/less/detail.less']) //已數組方式將多文件傳入
        .pipe(less())
        .pipe(gulp.dest('src/css')); //将會在src/css下生成index.css以及detail.css
});

gulp.task('testLess2', function () {
    gulp.src(['src/less/*.less', '!src/less/**/{reset,test}.less']) 
        .pipe(less())
        .pipe(gulp.dest('src/css'));
});

gulp.task('testLess3', function () {
    gulp.src('src/less/index.less')
        .pipe(less())
        .pipe(cssmin()) //兼容IE7及以下需设置compatibility属性 .pipe(cssmin({compatibility: 'ie7'}))
        .pipe(gulp.dest('src/css'));
});
gulp.task('testLess4', function () {
    gulp.src('src/less/**/*.less')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('src/css'));
});

gulp.task('testLessch', function () {
    gulp.src('src/less/*.less')
        .pipe(plumber({errorHandler: notify.onError('Error: <%= error.message %>')}))
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('src/css'));
});

gulp.task('testWatch', function () {
    gulp.watch('src/**/*.less', ['testLessch']); //當所有LESS黨改變時，使用testLessch任務
});

gulp.task('default',['testLess']); //定义默认任务

//gulp.task(name[, deps], fn) 定义任务  name：任务名称 deps：依赖任务名称 fn：回调函数
//gulp.src(globs[, options]) 执行任务处理的文件  globs：处理的文件路径(字符串或者字符串数组) 
//gulp.dest(path[, options]) 处理完后文件生成路径