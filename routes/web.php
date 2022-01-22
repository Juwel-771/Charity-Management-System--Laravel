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
use App\Http\Controllers\SubscripController;
use App\Http\Controllers\VolunteerController;
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

// Route for Volunteer
Route::get('volunteer', [VolunteerController::class,'index']);
// Route::get('volunteer', [VolunteerController::class,'imgShow']);
// Route::view('volunteer','volunteer');
Route::post('volunForm',[VolunteerController::class,'store']);
Route::get('profile/{id}',[VolunteerController::class,'profile']);
Route::get('/volunShow',[VolunteerController::class,'viewVolun']);
Route::get('/edit/{id}',[VolunteerController::class,'edit']);
Route::post('/editVolun',[VolunteerController::class,'create']);
Route::view('volunForm', 'volunForm');



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

// ---------------------------Start of Admin Dashboard Routes----------------------------
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

// Route for Subscription
Route::view('/subscription', 'admin.subscription');
Route::get('/subscription',[SubscripController::class,'index']);
Route::post('/',[SubscripController::class,'create']);
Route::get('/destroy/{id}',[SubscripController::class,'destroy']);

// Route for Food-Dashboard 
// Route::view('foodShow','admin.foodShow');
Route::get('/foodShow',[FoodController::class,'foodShow']);
Route::get('/edit_food/{id}',[FoodController::class,'edit_food']);
Route::post('/foodEdit',[FoodController::class,'approve']);

// Route for Blood-Dashboard
Route::get('/bloodShow',[BloodController::class,'bloodShow']);
Route::get('/edit_blood/{id}',[BloodController::class,'edit_blood']);
Route::post('/bloodEdit',[BloodController::class,'approve']);

// Route for Medicine-Dashboard
Route::get('/medicineShow',[MedicineController::class,'medicineShow']);
Route::get('/edit_medi/{id}',[MedicineController::class,'edit_medi']);
Route::post('/medicineEdit',[MedicineController::class,'approve']);

// Route for Cloth-Dashboard
Route::get('/clothShow',[ClothController::class,'clothShow']);
Route::get('/edit_cloth/{id}',[ClothController::class,'edit_cloth']);
Route::post('/clothEdit',[ClothController::class,'approve']);

// Route for Goods-Dashboard
Route::get('/goodsShow',[GoodsController::class,'goodsShow']);
Route::get('/edit_goods/{id}',[GoodsController::class,'edit_goods']);
Route::post('/goodEdit',[GoodsController::class,'approve']);


// ---------------------------Start of Admin Dashboard Routes----------------------------
// Route for Volunteer 
Route::post('/volunForm',[VolunteerController::class,'store']);


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
