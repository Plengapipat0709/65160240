<?php
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
Route::get('/my-route',function(){
    //return view('myroute');
    echo "<h1> Welcome to my world </h1>";
    $data = ['val_a' => 'Hellow World'];
    $data['val_b'] = " Laravel";
    return view('myfolder.mypage',$data);
});
Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute',$data);
});
