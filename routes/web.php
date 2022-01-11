<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\NewsCommnetController;
use App\Http\Controllers\PostNewsController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/donor',[DonorController::class,'index'])->name('donor');
    Route::post('/donor',[DonorController::class,'create'])->name('donor');
});


// Route for Food-Controller
Route::get('/food',[FoodController::class,'index']);
Route::post('/food',[FoodController::class,'create']);

// Route for Blood-Controller
Route::get('/blood',[BloodController::class,'index']);
Route::post('/blood',[BloodController::class,'create']);

// Route for Medicine-Controller
Route::get('/medicine',[MedicineController::class,'index']);
Route::post('/medicine',[MedicineController::class,'create']);


// Route for Cloth-Controller
Route::get('/clothing',[ClothController::class,'index']);
Route::post('/clothing',[ClothController::class,'create']);

//Route for Financial Donation
// Route::get('/clothing',[ClothController::class,'index']);
// Route::post('/clothing',[ClothController::class,'create']);

// Route for Goods Donation
Route::get('/goods',[GoodsController::class,'index']);
Route::post('/goods',[GoodsController::class,'create']);



//Route for Blog
Route::get('/blog',[BlogController::class,'index']);

// Route for Admin Dashboard
// Route for Dashboard-Blog
Route::view('/blogform', 'admin.blogform');
Route::post('/blogform',[BlogController::class,'store']);
Route::get('/viewblog',[BlogController::class,'detail']);
Route::get('/editblog/{id}',[BlogController::class,'edit']);
Route::put('/editblog/{id}',[BlogController::class,'update']);
Route::get('/destroy/{id}',[BlogController::class,'destroy']);

//Route for News Section
Route::get('/news',[PostNewsController::class,'index']);
Route::post('/news',[NewsCommnetController::class,'create']);
Route::view('/postNews','admin.postNews');
Route::post('/postNews',[PostNewsController::class,'store']);
Route::get('/viewNews',[PostNewsController::class,'show']);
Route::get('/editNews/{id}',[PostNewsController::class,'edit']);
Route::put('/editNews/{id}',[PostNewsController::class,'update']);
Route::view('/editComment','admin.editComment');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Route::view('food', 'donors.food');
// Route::view('blood', 'donors.blood');
// Route::view('medicine', 'donors.medicine');
// Route::view('clothing', 'donors.clothing');
Route::view('financial', 'donors.financial');
Route::view('goods', 'donors.goods');

require __DIR__.'/auth.php';
