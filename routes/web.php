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
//Route::get('/home/create', 'bnicontroller@show');
Route::get('/home/request', 'filecontroller@show');
Route::get('/download/{id?}','filecontroller@ftpfile')->where('id', '(.*)');
//Route::get('/home/request', 'bnicontroller@index');
Route::resource('home', 'bnicontroller')->only([
    'index','create','store'
]);
Route::get('home/create1', 'bnicontroller1@create1');
//Route::resource('home/create1', 'bnicontroller1')->only([
//    'create1','store1'
//]);

Route::get('/home/create1', 'bnicontroller1@create1');
Route::post('/home/create1', 'bnicontroller1@store1');
Route::get('/home/create2', 'bnicontroller1@create2');
Route::post('/home/create2', 'bnicontroller1@store2');
Route::get('/home/create3', 'bnicontroller1@create3');
Route::post('/home/create3', 'bnicontroller1@store3');

//Route::get('home/create1', 'bnicontroller1@create1');
//Route::get('home/create1', 'bnicontroller1@store1');
//Route::resource('create1', 'bnicontroller1')->only([
//    'store1'
//]);

//Route::get('/home/request', function(){
//	$nama = 'lazu';
//	View::make("request")->with('nama', $nama);
//});

// Route::get('/bni','bnicontroller@index');
?>