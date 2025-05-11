<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts/header_footer_skydah');
    })->name('dashboard');
});

Route::get('/userlogin', [usercontroller::class, ('userdatafetch')]);

// cosmatic-route
Route::get('/dash_cosmatic', function () {
    return view('dash_cosmatic');
});
Route::post('/inserted', [usercontroller::class, ('insertdata')]);
Route::get('/cosmatic_FETCH', [usercontroller::class, ('fechdata')]);
Route::get('/cosdeleted/{cosid}', [usercontroller::class, ('deletedpro')]);
Route::get('/cosupdate/{cosid}', [usercontroller::class, ('updatecos')]);
Route::get('/cosmatic', [usercontroller::class, ('cos_fetch_pro')]);
Route::post('/cosupdate/{cosid}', [usercontroller::class, ('cosupdated')]);

// jewellery-route
Route::get('/dash_jewellery', function () {
    return view('dash_jewellery');
});
Route::post('/inserted_data', [usercontroller::class, ('insert_data')]);
Route::get('/jewellery_FETCH', [usercontroller::class, ('fech_data')]);
Route::get('/jewellerydeleted/{cosid}', [usercontroller::class, ('deleted_pro')]);
Route::get('/jewellery', [usercontroller::class, ('cosfetch_pro')]);

// contact-route
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [usercontroller::class, ('inserteddata')]);
Route::get('/contactlogin', [usercontroller::class, ('fetchcontact')]);
Route::get('/contactdelete/{contactid}', [usercontroller::class, ('deletuser')]);

// topsale
Route::get('/dash_sale', function () {
    return view('dash_sale');
});
Route::post('/insert', [usercontroller::class, ('topinsertdata')]);
Route::get('/sale_FETCH', [usercontroller::class, ('topfech_data')]);
Route::get('/saledeleted/{cosid}', [usercontroller::class, ('saledeleted_pro')]);
Route::get('/topsale', [usercontroller::class, ('salefetch_pro')]);

// topClient
Route::get('/dash_client', function () {
    return view('dash_client');
});
Route::post('/Clientinsert', [usercontroller::class, ('top_insertdata')]);
Route::get('/client_FETCH', [usercontroller::class, ('top_fetch_data')]);
Route::get('/clientdeleted/{cosid}', [usercontroller::class, ('clientdeleted_pro')]);
Route::get('/topclient', [usercontroller::class, ('clientfetch_pro')]);

// minishop-route
Route::get('/dash_mini', function () {
    return view('dash_mini');
});
Route::post('minisainserted', [usercontroller::class, ('miniinsert')]);
Route::get('/minishop_FETCH', [usercontroller::class, ('minifetch')]);
Route::get('/minideleted/{miniid}', [usercontroller::class, ('minideleted_pro')]);
Route::get('/', [usercontroller::class, ('minifetch_pro')]);



Route::post('/cart/add', 'CartController@add')->name('cart.add');