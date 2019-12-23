<?php


Route::redirect('lara-admin','login');
Route::get('/','HomeController@index')->name('welcome'); 

Auth::routes();

Route::group(['prefix'=>'dealer','middleware'=>'auth','namespace'=>'Dealer'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('dealer.dashboard'); 
    
    Route::get('car_listing','CarListingController@index');

    Route::get('car_listing/show/{id}','CarListingController@show');

    Route::get('car_listing/add','CarListingController@create');
    Route::post('car_listing/add','CarListingController@store');   

    Route::get('car_listing/edit/{id}','CarListingController@edit');
    Route::post('car_listing/edit/{id}','CarListingController@update')->name('car_listing.update');

    Route::delete('car_listing/destroy/{id}','CarListingController@destroy');

    Route::resource('reports','ReportsController');

});