<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/auth', 'homeController@index');
//Route::post('/', 'homeController@index');
//insert view
Route::get('/insertPhone', 'PhoneController@adminInsertPhone');
//insert phone
Route::post('/insertPhone', 'PhoneController@adminStorePhone');
Route::get('/UpdatePhone','UpdatePhoneController@InsertUpdate');
Route::post('/UpdatePhone','UpdatePhoneController@StoreUpdate');
Route::get('/manageBrand','ManageBrandController@manageBrand');
Route::get('/UpdateBrand','update_brand_controller@updateBrand');
Route::get('/InsertMember','InsertMemberController@InsertMember_index');
Route::post('/InsertMember_create','InsertMemberController@InsertMember_create')->name('InsertMember_create');
Route::get('/UpdateMember','UpdateMemberController@UpdateMember_index');
Route::post('/UpdateMember_create','UpdateController@UpdateMember_create')->name('UpdateMember_create');

//transcation detail
Route::post('/transactionDetail','TransactionDetail_controller@TransactionDetail');
Route::get('/transactionDetail','TransactionDetail_controller@TransactionDetail');

//managePhone
Route::get('/managePhone','ManagePhone@ManagePhone');
Route::post('/managePhone','ManagePhone@ManagePhone');

//showphone
Route::get('/showItem','PhoneController@getData');

//update Profile
Route::get('/update','updateController@update');
Route::post('/update','updateController@updates');



