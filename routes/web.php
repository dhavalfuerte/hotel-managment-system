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
//User
Route::get('login',[
    'as' => 'User.Login',
    'uses' => 'UserController@login']);
Route::post('loginsuccess',[
    'as' => 'login.success',
    'uses' => 'UserController@loginsuccess']);
Route::get('signup',[
    'as' => 'User.SignUp',
    'uses' => 'UserController@add']);
Route::post('/adduser','UserController@success');
Route::resource('home', 'IndexController');
Route::resource('service','ServiceController');
Route::resource('contact', 'ContactController'); 
Route::get('/about', 'AboutController@index');
Route::resource('feedback', 'FeedbackController');


 Route::middleware('auth')
    ->group(function () {
     #  Route::resource('feedback', 'FeedbackController');
        Route::get('logout', [
        'as' => 'logout',
        'uses' => 'HomeController@logout',]);
        Route::resource('food', 'FoodController');
        Route::get('room','RoomstypeController@userIndex');         
        Route::resource('family','FamilyController');
        Route::resource('book', 'BookController');

    });




//ADMIN
Route::get('AdminLogin',[
    'as' => 'Admin.login',
    'uses' => 'AdminLoginController@login']);
Route::post('adminloginsuccess',[
    'as' => 'adminlogin.success',
    'uses' => 'AdminLoginController@loginsuccess']);

Route::middleware('Admin')
    ->group(function () {
    
    Route::get('admindashboard',function()
    {
        return view('Admin.dashboard');
    });

    Route::resources(['adminService' => 'AdminServiceController',
'adminContact' => 'AdminContactController',
'adminUser' => 'AdminUserController', 
                'adminRoomstype'=>'RoomstypeController',
                'adminRooms'=>'RoomsController',
            'adminFeedback' => 'AdminFeedbackController',
            'book'=>'BookController',]);
   
    
    Route::get('adminlogout', [
        'as' => 'adminlogout',
        'uses' => 'AdminLoginController@logout',]);

    
});
/*
//Route::resource('login', 'LoginController');
/*Route::get('/login', function(){
    return view('User.Login');
});
Route::get('events', 'EventController@index');
Route::get('/img',function(){
    return view('Admin.Food.create');
//Route::resources(['adminRoom' => 'AdminRoomController',]);
Route::post('/input','FoodController@store');
Route::get('/disp','FoodController@index');

*/
//Route::resource('signup', 'SignUpController');

