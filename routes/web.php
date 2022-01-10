<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\MedicineController;
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

//Route for Admin Dashboard
Route::view('/blogform', 'admin.blogform');
Route::post('/blogform',[BlogController::class,'create']);

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
