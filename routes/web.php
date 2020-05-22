<?php

use App\Http\Middleware\ApiMiddleware;


/**
 * 接口
 */
Route::prefix('api')->middleware(ApiMiddleware::class)->group(function () {
    //会员
    Route::any('users/{method}',                    'Api\UsersController');
    Route::any('users/{method}/{action}',           'Api\UsersController');
    //项目
    Route::any('project/{method}',                  'Api\ProjectController');
    Route::any('project/{method}/{action}',         'Api\ProjectController');
    //汇报
    Route::any('report/{method}',                   'Api\ReportController');
    Route::any('report/{method}/{action}',          'Api\ReportController');
});


/**
 * 页面
 */
Route::any('/',                                     'IndexController');
Route::any('/{method}',                             'IndexController');
Route::any('/{method}/{action}',                    'IndexController');
Route::any('/{method}/{action}/{child}',            'IndexController');
Route::any('/{method}/{action}/{child}/{n}',        'IndexController');
Route::any('/{method}/{action}/{child}/{n}/{c}',    'IndexController');
