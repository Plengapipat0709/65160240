<?php
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-route', function () {
    return view('myfolder.mypage');
});
Route::post('/my-route', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});
Route::post('/my-page', function (Request $req) {
    $req->validate([
        'back' => 'required|string',
    ]);
    $data['back'] = $req->input('back');
    return view('back', $data);
});
Route::get('/my-controller',[MyController::class,'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3','MyController@index');
    
});
Route::resource('/my-controller4',MyController::class);
