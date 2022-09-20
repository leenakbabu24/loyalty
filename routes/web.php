<?php

use App\Http\Controllers\loyaltyController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\managerController;
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

Route::get('/index_admin', [adminController::class,'index_admin']);
Route::get('/login_admin', [adminController::class,'login_admin']);
Route::post('/loginadminAction', [adminController::class,'loginadminAction']);
Route::get('/logout', [adminController::class,'logout']);
Route::get('/view_manager', [adminController::class,'view_manager']);
Route::get('/approve1/{id}', [adminController::class,'approve1']);
Route::get('/decline1/{id}', [adminController::class,'decline1']);
Route::get('/approve2/{id}', [adminController::class,'approve2']);
Route::get('/decline2/{id}', [adminController::class,'decline2']);
Route::get('/view_product1', [adminController::class,'view_product1']);
Route::get('/view_contact', [adminController::class,'view_contact']);
Route::get('/add_about',[adminController::class,'add_about']);
Route::post('/addaboutAction', [adminController::class,'addaboutAction']);
Route::get('/view_about', [adminController::class,'view_about']);
Route::get('/edit1/{id}', [adminController::class,'edit1']);
Route::post('/editaction1/{id}', [adminController::class,'editaction1']);
Route::get('/delete1/{id}', [adminController::class,'delete1']);

Route::get('/index', [loyaltyController::class,'index']);
Route::get('/cart_detail', [loyaltyController::class,'cart_detail']);
Route::get('/cart/{id}', [loyaltyController::class,'cart']);
Route::get('/cartAction/{id}', [loyaltyController::class,'cartAction']);
Route::get('/about_view',[loyaltyController::class,'about_view']);
Route::get('/logout', [loyaltyController::class,'logout']);
Route::get('/contact', [loyaltyController::class,'contact']);
Route::post('/contactAction', [loyaltyController::class,'contactAction']);
Route::get('/register_user', [loyaltyController::class,'register_user']);
Route::get('/register_manager', [loyaltyController::class,'register_manager']);
Route::get('/login_user', [loyaltyController::class,'login_user']);
Route::get('/view_product2', [loyaltyController::class,'view_product2']);
Route::get('/login_manager', [loyaltyController::class,'login_manager']);
Route::post('/registeruserAction', [loyaltyController::class,'registeruserAction']);
Route::post('/registermanagerAction', [loyaltyController::class,'registermanagerAction']);
Route::post('/loginuserAction', [loyaltyController::class,'loginuserAction']);
Route::get('/checkout', [loyaltyController::class,'checkout']);
Route::get('/delete_item/{id}', [loyaltyController::class,'delete_item']);
Route::post('/loginmanagerAction', [loyaltyController::class,'loginmanagerAction']);
Route::get('/orderAction', [loyaltyController::class,'orderAction']);
Route::get('/index_customer', [loyaltyController::class,'index_customer']);
Route::get('/edit_profile1', [loyaltyController::class,'edit_profile1']);
Route::post('/updateaction/{id}', [loyaltyController::class,'updateaction']);
Route::get('/add_feedback', [loyaltyController::class,'add_feedback']);
Route::post('/feedbackAction', [loyaltyController::class,'feedbackAction']);
Route::get('/index', [loyaltyController::class,'index']);
Route::get('/view_product2', [loyaltyController::class,'view_product2']);
Route::get('/payment',[loyaltyController::class,'payment']);
Route::post('/paymentAction', [loyaltyController::class,'paymentAction']);
Route::get('/creditAction', [loyaltyController::class,'creditAction']);
Route::get('/index_manager', [managerController::class,'index_manager']);
Route::get('/logout', [managerController::class,'logout']);
Route::get('/edit_profile', [managerController::class,'edit_profile']);
Route::post('/updateaction/{id}', [managerController::class,'updateaction']);
Route::get('/view_customer', [managerController::class,'view_customer']);
Route::get('/add_product', [managerController::class,'add_product']);
Route::post('/addAction', [managerController::class,'addAction']);
Route::get('/view_product', [managerController::class,'view_product']);
Route::get('/edit/{id}',[managerController::class,'edit']);
Route::post('/editaction_manager/{id}',[managerController::class,'editaction_manager']);
Route::get('/delete/{id}', [managerController::class,'delete']);
Route::get('/view_feedback', [managerController::class,'view_feedback']);
Route::get('/approve/{id}', [managerController::class,'approve']);
Route::get('/decline/{id}', [managerController::class,'decline']);
