<?php

Route::get('/', 'HomeController@welcome');

//SIGN UP ROUTE
Route::get('signup', 'HomeController@signup');
Route::post('store', 'HomeController@store');
//END OF SIGN UP ROUTE

//LOGIN ROUTE
Route::get('login', 'HomeController@login');
Route::post('loginstore', 'HomeController@loginstore');
//END OF LOGIN ROUTE

//LOGOUT ROUTE
Route::get('logout','HomeController@logout');
//END OF LOGOUT ROUTE

//MIDDLEWARE ROUTE
Route::group(['middleware' => 'checkloggedin'], function(){

    //CONSUMER ROUTE
    Route::group(['middleware' => 'consumerloggedin'],function(){
        Route::get('foodie', 'ConsumerController@foodie');
        Route::get('restaurantlist', 'ConsumerController@restaurant');
        Route::get('restaurantabout/{id}', 'ConsumerController@restaurantabout');
        Route::post('updateprofile/{id}', 'ConsumerController@update');
        Route::get('userprofile','ConsumerController@profile');
        Route::get('cal', function()
        {
          return view('consumer.pages.calender');
        });
    });
    //END OF CONSUMER ROUTE

    //RESTAURANT ROUTE
    Route::group(['middleware' => 'ownerloggedin'],function(){
        Route::get('owner','OwnerController@owner');
        Route::post('userdetails','OwnerController@userdetails');
        Route::get('orders','OwnerController@order');
        Route::get('profile','OwnerController@profile');
        Route::get('category','OwnerController@category');
        Route::post('addcategory','OwnerController@addcategory');
        Route::post('editcategory/{id}','OwnerController@edit');
        Route::get('delete/{id}','OwnerController@delete');
        // Route::get('menu','OwnerController@menu');
        Route::get('menu','OwnerController@menu');
        Route::get('add','OwnerController@add');
        Route::post('addmenu','OwnerController@addmenu');
        Route::post('editmenu/{id}','OwnerController@editmenu');
        Route::get('deletemenu/{id}','OwnerController@deletemenu');
        Route::get('profile1','OwnerController@profile');
        Route::post('update/{id}', 'OwnerController@update');
        Route::get('calender', function()
        {
          return view('restaurant.pages.calender');
        });


    });
    //END OF RESTAURANT ROUTE

});
//END OF MIDDLEWARE ROUTE


Route::get('unauthorized', function()
{
  return view('unauthorized');
});
Route::get('unauthorized1', function()
{
  return view('unauthorized1');
});
Route::get('unauthorized2', function()
{
  return view('unauthorized2');
});
Route::get('unauthorized3', function()
{
  return view('unauthorized3');
});
