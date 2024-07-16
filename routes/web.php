<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});

Route::get('w', function () {
    return ('heyyy');
});

Route::get('person/{id?}', function ($id=6) {
    return 'person number is :'. $id;
})->where([
    'id'=>'[0-9]+'
]);

Route::get('car/{id?}', function ($id=0) {
    return 'your car id is '. $id;
})->whereNumber('id');

Route::get('f/{name}/{age}', function ($name, $age){
    return 'username is '. $name. ' and your age is '. $age .' years';
})->where([
    'name'=>'[a-zA-Z]+',
    'age'=>'[0-9]+'
]);
//if age is optional .......?...... $age=0
Route::get('user/{name}/{age?}', function ($name, $age=0){
    if ($age==0){
        return 'username is '. $name;
    }else{
       return 'username is '. $name. ' and your age is '. $age .' years';
}})->where([
    'name'=>'[a-zA-Z]+',
    'age'=>'[0-9]+'
]);
// specific options only
Route::get('ki/{name}', function ($name){
    return 'username is '. $name;
})->whereIn('name',['iman', 'mohamed']);

//prefix
//company/IT
//company/users
//company/ -->
Route::prefix('company')->group(function (){
    Route::get('',function(){
        return'company index';
    });
    Route::get('IT',function(){
        return'company IT';
    });
    Route::get('users',function(){
        return'company users';
    });
});

// - accounts
// - accounts/admin
// - accounts/user
Route::prefix('accounts')->group(function () {
    Route::get('', function(){
    return 'accounts index';
    });
    Route::get('admin', function(){
    return 'accounts admin';
    });
    Route::get('user', function(){
        return 'accounts user';
        });
    });
    // - cars
    // - cars/usa/ford
    // - cars/usa/tesla
    // - cars/ger/mercedes
    // - cars/ger/audi
    // - cars/ger/volkswagen  
Route::prefix('cars')->group(function () {
    Route::get('', function(){
        return'cars index';
    });
    Route::get('usa/{type}', function($type){
       return'cars usa '.$type;
        });
    Route::get('ger/{type}',function($type){
        return'cars ger '.$type;
     })->where([
        'type'=>'[a-zA-Z]+'
    ]);
});

//Another way
Route::prefix('cars')->group(function () {
    Route::get('', function(){
        return'cars index';
    });
    Route::get('usa/{type}', function($type){
       return'cars usa '.$type;
        })->whereIn('type',['ford', 'tesla']);

    Route::get('ger/{type}',function($type){
        return'cars ger '.$type;
     })->whereIn('type',['mercedes','audi', 'volkswage']);
});
