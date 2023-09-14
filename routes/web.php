<?php

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

Route::get('/Listing', function (){
    return View('listing');
});

Route::get('/Pricelist', function (){
    return View('pricelist');
});

Route::get('/About-Me', function (){
    return View('aboutme');
});



//z4
Route::get('/Listing/BMW-Z4-Roadster', function (){
    return View('Z4Roadster');
});
Route::get('/Listing/BMW-Z4-M40i-Roadster', function (){
    return View('Z4M40iRoadster');
});



//i
Route::get('/Listing/BMW-iX', function (){
    return View('ix');
});
Route::get('/Listing/BMW-i7', function (){
    return View('i7');
});
Route::get('/Listing/BMW-i4', function (){
    return View('i4');
});



//x
Route::get('/Listing/XM', function (){
    return View('xm');
});
Route::get('/Listing/X1', function (){
    return View('x1');
});
Route::get('/Listing/X3', function (){
    return View('x3');
});
Route::get('/Listing/X4', function (){
    return View('x4');
});
Route::get('/Listing/X5', function (){
    return View('x5');
});
Route::get('/Listing/X6', function (){
    return View('x6');
});
Route::get('/Listing/X7', function (){
    return View('x7');
});



//m
Route::get('/Listing/X4M', function (){
    return View('x4m');
});
Route::get('/Listing/X3M', function (){
    return View('x3m');
});
Route::get('/Listing/M4Coupe', function (){
    return View('m4coupe');
});
Route::get('/Listing/M4Convertible', function (){
    return View('m4convertible');
});
Route::get('/Listing/M3Sedan', function (){
    return View('m3sedan');
});
Route::get('/Listing/M3Competition-Touring', function (){
    return View('m3competitiontouring');
});
Route::get('/Listing/M2Coupé', function (){
    return View('m2coupe');
});


//8
Route::get('/Listing/8-coupe', function (){
    return View('8coupe');
});
Route::get('/Listing/8-gran-coupe', function (){
    return View('8grancoupe');
});


//7
Route::get('/Listing/7--series-sedan', function (){
    return View('7sedan');
});


//5
Route::get('/Listing/5-sedan', function (){
    return View('5sedan');
});
Route::get('/Listing/5-touring', function (){
    return View('5touring');
});


//4
Route::get('/Listing/4-coupé', function (){
    return View('4coupe');
});
Route::get('/Listing/4-convertible', function (){
    return View('4convertible');
});

//3
Route::get('/Listing/3-sedan', function (){
    return View('3sedan');
});


//2
Route::get('/Listing/2-coupé', function (){
    return View('2coupe');
});
Route::get('/Listing/2-gran-coupé', function (){
    return View('2grancoupe');
});

//about
Route::get('/About-Me', function (){
    return View('aboutme');
});