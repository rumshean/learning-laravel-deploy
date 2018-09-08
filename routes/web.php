<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home/create', 'bnicontroller@show');
Route::get('/home/request', 'filecontroller@show');
Route::get('/download/{id?}','filecontroller@ftpfile')->where('id', '(.*)');
//Route::get('/home/request', 'bnicontroller@index');
Route::resource('/home', 'bnicontroller')->only([
    'index', 'create', 'store','show'
]);


//Route::get('/home/request', function(){
//	$nama = 'lazu';
//	View::make("request")->with('nama', $nama);
//});

// Route::get('/bni','bnicontroller@index');
?>