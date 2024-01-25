<?php

use App\Http\Controllers\Test\TestController as TestTestController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(){
    return view('welcome');
});
// Route::get('/', function () {
//     $appName = config('app.timezone');
//     return view('welcome',compact('appName'));
// });
// Route::get('news', function () {
//     return view('news.allNews');
// });
// Route::get('news',[TestController::class ,'mahmoud']);
// Route::get('newsp',[TestController::class ,'mohamed']);
// Route::get('/test/news' ,[TestTestController::class , 'getView']);