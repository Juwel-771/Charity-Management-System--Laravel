<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointVolunteer;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\CharityController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\EventOrganizeController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\MakeDonation;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\NewsCommnetController;
use App\Http\Controllers\OrgProfileController;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\SubscripController;
use App\Http\Controllers\UserProfileController;
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

// Route For charities
Route::get('charities',[CharityController::class,'index']);
Route::get('education',[CharityController::class,'educationIndex']);
Route::get('health',[CharityController::class,'healthIndex']);
Route::get('environment',[CharityController::class,'environmentIndex']);
Route::get('human',[CharityController::class,'humanIndex']);
Route::get('animal',[CharityController::class,'animalIndex']);
Route::get('social',[CharityController::class,'socialIndex']);
Route::get('child',[CharityController::class,'childIndex']);
Route::get('refuge',[CharityController::class,'refugeIndex']);
Route::get('victim',[CharityController::class,'victimIndex']);

// Route for Make Donation
Route::get('makeDonation',[MakeDonation::class,'index']);
Route::get('foodDonate',[MakeDonation::class,'food']);
Route::get('bloodDonate',[MakeDonation::class,'blood']);
Route::get('clothDonate',[MakeDonation::class,'cloth']);
Route::get('goodsDonate',[MakeDonation::class,'goods']);
Route::get('mediDonate',[MakeDonation::class,'medicine']);
Route::get('financialDonate',[MakeDonation::class,'financial']);
Route::get('/foodProfile/{id}',[MakeDonation::class,'profile']);
Route::get('/bloodProfile/{id}',[MakeDonation::class,'blood_profile']);
Route::get('/clothProfile/{id}',[MakeDonation::class,'cloth_profile']);
Route::get('/goodsProfile/{id}',[MakeDonation::class,'goods_profile']);
Route::get('/medicineProfile/{id}',[MakeDonation::class,'medicine_profile']);
Route::get('/financialProfile/{id}',[MakeDonation::class,'financial_profile']);


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
Route::get('/financial',[FinancialController::class,'index']);
Route::post('/financial',[FinancialController::class,'create']);
// Route::get('/clothing',[ClothController::class,'index']);
// Route::post('/clothing',[ClothController::class,'create']);

// Route for Goods Donation
Route::get('/goods',[GoodsController::class,'index']);
Route::post('/goods',[GoodsController::class,'create']);



//Route for Blog
Route::get('/blog',[BlogController::class,'index']);


// #################################### Start of Admin Dashboard Routes ####################################

// Admin Profile
// Route::get('/adminProfile/{id}',[AdminController::class,'show']);
Route::view('/adminProfile','admin.adminProfile');
// Route::get('/adminProfile/{id}',[AdminController::class,'show']);
Route::get('/adminForm',[AdminController::class,'index']);
Route::post('/adminForm',[AdminController::class,'store']);

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
Route::get('/destroy_food/{id}',[FoodController::class,'destroyFood']);
// Route::get('/delete_food/{id}',[FoodController::class,'deleteFood']);

// Route for Blood-Dashboard
Route::get('/bloodShow',[BloodController::class,'bloodShow']);
Route::get('/edit_blood/{id}',[BloodController::class,'edit_blood']);
Route::post('/bloodEdit',[BloodController::class,'approve']);
Route::get('/destroy_blood/{id}',[BloodController::class,'destroyBlood']);

// Route for Medicine-Dashboard
Route::get('/medicineShow',[MedicineController::class,'medicineShow']);
Route::get('/edit_medi/{id}',[MedicineController::class,'edit_medi']);
Route::post('/medicineEdit',[MedicineController::class,'approve']);
Route::get('/destroy_medi/{id}',[MedicineController::class,'destroyMedi']);

// Route for Cloth-Dashboard
Route::get('/clothShow',[ClothController::class,'clothShow']);
Route::get('/edit_cloth/{id}',[ClothController::class,'edit_cloth']);
Route::post('/clothEdit',[ClothController::class,'approve']);
Route::get('/destroy_cloth/{id}',[ClothController::class,'destroy_cloth']);

// Route for Goods-Dashboard
Route::get('/goodsShow',[GoodsController::class,'goodsShow']);
Route::get('/edit_goods/{id}',[GoodsController::class,'edit_goods']);
Route::post('/goodEdit',[GoodsController::class,'approve']);
Route::get('/destroy_goods/{id}',[GoodsController::class,'destroy_good']);

// Route for Financial-Dashboard
Route::get('/financialShow',[FinancialController::class,'financialShow']);
Route::get('/edit_financial/{id}',[FinancialController::class,'edit_financial']);
Route::post('/financialEdit',[FinancialController::class,'approve']);

// Route for Charity-Dashboard
// Route for Anima-charity
Route::get('/animalCharity',[CharityController::class,'animalView']);
Route::get('/addAnimal',[CharityController::class,'addAnimal']);
Route::post('/addAnimal',[CharityController::class,'store']);
// Route::post('/addAnimal',[CharityController::class,'store']);
Route::get('/edit_animal/{id}',[CharityController::class,'edit_animal']);
Route::put('/edit_animal/{id}',[CharityController::class,'animalUpdate']);
Route::get('/animal_delete/{id}',[CharityController::class,'animal_delete']);
Route::get('/showAnimal/{id}',[CharityController::class,'showAnimal']);
// Route::get('/showAnimal',[CharityController::class,'showFeedback']);
Route::post('/showAnimal',[CharityController::class,'animalFeedback']);

// Route for Education Charity
Route::get('/educationCharity',[CharityController::class,'educationView']);
Route::get('/addEducation',[CharityController::class,'addEducation']);
Route::post('/addEducation',[CharityController::class,'EducationStore']);
Route::get('/edit_education/{id}',[CharityController::class,'edit_education']);
Route::put('/edit_education/{id}',[CharityController::class,'educationUpdate']);
Route::get('/education_delete/{id}',[CharityController::class,'education_delete']);
Route::get('/showEducation/{id}',[CharityController::class,'showEducation']);
Route::post('/showEducation',[CharityController::class,'educationFeedback']);

// Rote For Child Charity: 
Route::get('/childCharity',[CharityController::class,'childView']);
Route::get('/addChild',[CharityController::class,'addChild']);
Route::post('/addChild',[CharityController::class,'ChildStore']);
Route::get('/edit_child/{id}',[CharityController::class,'edit_child']);
Route::put('/edit_child/{id}',[CharityController::class,'childUpdate']);
Route::get('/child_delete/{id}',[CharityController::class,'child_delete']);
Route::get('/showChild/{id}',[CharityController::class,'showChild']);
Route::post('/showChild',[CharityController::class,'childFeedback']);

// Rote For Enviroment Charity: 
Route::get('/environmentCharity',[CharityController::class,'environmentView']);
Route::get('/addEnvironment',[CharityController::class,'addEnvironment']);
Route::post('/addEnviroment',[CharityController::class,'EnviromentStore']);
Route::get('/edit_enviro/{id}',[CharityController::class,'edit_enviro']);
Route::put('/edit_enviro/{id}',[CharityController::class,'envrioUpdate']);
Route::get('/enviro_delete/{id}',[CharityController::class,'enviro_delete']);
Route::get('/showEnviroment/{id}',[CharityController::class,'showEnviroment']);
Route::post('/showEnviroment',[CharityController::class,'environmentFeedback']);

// Rote For Human Charity: 
Route::get('/humanCharity',[CharityController::class,'humanView']);
Route::get('/addHuman',[CharityController::class,'addHuman']);
Route::post('/addHuman',[CharityController::class,'HumanStore']);
Route::get('/edit_human/{id}',[CharityController::class,'edit_human']);
Route::put('/edit_human/{id}',[CharityController::class,'humanUpdate']);
Route::get('/human_delete/{id}',[CharityController::class,'human_delete']);
Route::get('/showHuman/{id}',[CharityController::class,'showHuman']);
Route::post('/showHuman',[CharityController::class,'humanFeedback']);




// ########################## END of Admin Dashboard Routes ############################
// Route for Volunteer 
Route::post('/volunForm',[VolunteerController::class,'store']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Route::view('food', 'donors.food');
// Route::view('blood', 'donors.blood');
// Route::view('medicine', 'donors.medicine');
// Route::view('clothing', 'donors.clothing');
// Route::view('financial', 'donors.financial');
// Route::view('goods', 'donors.goods');



// ---------------------------------- Routed For NGO Dashboard --------------------
// Route For Event Organization
// Route::view('event','ngo.event');
Route::get('/event',[EventOrganizeController::class,'index']);
Route::post('/event',[EventOrganizeController::class,'store']);
Route::get('events',[EventOrganizeController::class,'eventPage']);
Route::get('eventProfile/{id}',[EventOrganizeController::class,'eventProfile']);
Route::get('/ngoProfile/{id}',[EventOrganizeController::class,'eventProfileNog']);
Route::get('joinEvent/{id}',[EventOrganizeController::class,'joinEvent']);
Route::post('joinEvent/{id}',[EventOrganizeController::class,'EventMember']);
Route::get('/myEvent',[EventOrganizeController::class,'myEvent']);

// Route For Organization Profile.
Route::get('/orgProfile',[OrgProfileController::class,'viewProfile']);
Route::get('/editProfile',[OrgProfileController::class,'editProfile']);
Route::post('/editProfile',[OrgProfileController::class,'store']);

// Route For Appointed Volunteer
Route::get('/availableVolun',[AppointVolunteer::class,'index']);
Route::get('/appoint_volun/{id}',[AppointVolunteer::class,'appoint']);
Route::post('/recruitVolunteer',[AppointVolunteer::class,'create']);
Route::get('/selectedVolunteer',[AppointVolunteer::class,'selected']);
Route::get('/remove/{id}',[AppointVolunteer::class,'destroy'])->name('destroy');


// ##################################### USER DASHBOARD ROUTES ############################################
// Donor Profile
Route::get('/userProfile',[UserProfileController::class,'index']);
Route::get('/joinProfile',[UserProfileController::class,'showProfile']);
Route::post('/joinProfile',[UserProfileController::class,'store']);

require __DIR__.'/auth.php';
