<?php

use App\Http\Controllers\suzee;
use App\Models\Christy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admission',[suzee::class, "create"] );
Route::post('/admission',[suzee::class, "storedata"] );
Route::get('/showquery',[suzee::class,"showkaro"] );
Route::get('/admission/delete/{std_id}',[suzee::class,"delete"] );









Route::get('/admission/edit/{std_id}',[suzee::class,"edit"] );
Route::post('/admission/update/{std_id}',[suzee::class,"update"] );


Route::get('arhamkadata/', function () {

     $christi=christy::all();
     echo "<pre>";
     print_r($christi->toArray());
     echo "</pre>";


});