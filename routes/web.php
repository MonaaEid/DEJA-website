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
//reservation Routes section
Route::get('/reserv','reservationController@reserv');
//add a reservation to the database
Route::post('/add','reservationController@store');
//display a list of reservations
Route::get('/list','reservationController@index');
//display an item from reservations
Route::get('/list/{id}','reservationController@show');
//delete a reservation from the list
Route::get('/deleter/{id}','reservationController@delete');
//edit a reservation
Route::get('/editr/{id}','reservationController@edit');
Route::post('/editr/{id}/update','reservationController@update');
//-------------------------------------------------------------------


//menu Routes section
Route::get('/menu','dishController@show');
//insert menu (part)
//Route::get('/bringCategory','dishController@prepare'); //bring category
Route::get('/createMenu','dishController@create');//show form
Route::post('/upload','dishController@store'); //post to database
Route::get('/action','dishController@action')->name('action');

//delete from menu (part)
Route::get('/deletedish/{id}','dishController@delete');// delete dishfrom data base
//edit menu (part)
Route::get('/editMenu/{id}','dishController@edit'); //edit form
Route::post('/editMenu/{id}/update','dishController@update');//post from database
Route::get('/dishes','dishController@index');// show all dishes
//------------------------------------------------------------------
//order Routes
// Route::group(['middleware' => 'isAdmin'], function () {
// Route::get('/order','orderController@order');
// });

Route::get('/price', 'orderController@fetch')->name('price');
Route::get('/priceTwo', 'orderController@priceTwo')->name('priceTwo');
Route::get('/totalPriceUpdate', 'orderController@totalPriceUpdate')->name('totalPriceUpdate');

Route::get('/order','orderController@order');
Route::post('/store','orderController@makeOrder');
Route::get('/order-confirm','orderController@confirm');
Route::get('/order/cancel/{id}','orderController@cancel');
//=============================================================
//Home page Routes
Route::get('/','HomeController@special');
Route::get('/search', 'HomeController@search');
//============================================================
//review-us Routes
Route::get('/review-us','reviewController@index');
Route::post('/review-us/store','reviewController@store');
//============================================================
// user profile routes
Route::get('/profile/{id}','userController@profile');

Route::post('/profile/{id}/update','userController@update');

//contact us Routes
Route::get('/contact-us', 'contactController@getContact');
Route::post('/contact-us/send', 'contactController@saveContact');
//=============================================================
//dashboard
Route::get('/dashboard', 'dashboardController@dashboard');
Route::get('/dashboard/tables/basic-info', 'dashboardController@basic_info');
Route::get('/edit_basic_info/{id}','dashboardController@edit_basic_info');
Route::post('/edit_basic_info/{id}/update','dashboardController@update_basic_info');
Route::get('/dashboard/tables/order', 'dashboardController@orders');
Route::get('/dashboard/delete/{id}', 'dashboardController@deleteOrder');


//=============================================================
// employee Routes
Route::get('/addemployee','dashboardController@employee');
Route::post('/addemployee','dashboardController@NewEmployee');
Route::get('/editemployee/{id}','dashboardController@edit');
Route::post('/editemployee/{id}/update','dashboardController@update');
Route::get('/delete/{id}','dashboardController@delete');
Route::get('/employees','dashboardController@index');

//Route::get('/dashboard/tables/', 'dashboardController@dashboard');
// Route::group(['middleware' => 'isAdmin'], function () {
//     Route::get('admin', 'adminController@adminDashboard');
// });
//pages Routes
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/contact', function () {
    return view('contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

