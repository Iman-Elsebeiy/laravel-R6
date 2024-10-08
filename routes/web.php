<?php


use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

use function Pest\Laravel\session;

Route::get('login', [ExampleController::class, 'login']);
    

Route::get('cv', [ExampleController::class, 'cv']);


Route::get('', function () {
    return view('welcome');
});

Route::get('w', function () {
    return ('heyyy');
});

// Route::get('person/{id?}', function ($id=6) {
//     return 'person number is :'. $id;
// })->where([
//     'id'=>'[0-9]+'
// ]);

// Route::get('car/{id?}', function ($id=0) {
//     return 'your car id is '. $id;
// })->whereNumber('id');

// Route::get('f/{name}/{age}', function ($name, $age){
//     return 'username is '. $name. ' and your age is '. $age .' years';
// })->where([
//     'name'=>'[a-zA-Z]+',
//     'age'=>'[0-9]+'
// ]);
// //if age is optional .......?...... $age=0
// Route::get('user/{name}/{age?}', function ($name, $age=0){
//     if ($age==0){
//         return 'username is '. $name;
//     }else{
//        return 'username is '. $name. ' and your age is '. $age .' years';
// }})->where([
//     'name'=>'[a-zA-Z]+',
//     'age'=>'[0-9]+'
// ]);
// // specific options only
// Route::get('ki/{name}', function ($name){
//     return 'username is '. $name;
// })->whereIn('name',['iman', 'mohamed']);

// //prefix
// //company/IT
// //company/users
// //company/ -->
// Route::prefix('company')->group(function (){
//     Route::get('',function(){
//         return'company index';
//     });
//     Route::get('IT',function(){
//         return'company IT';
//     });
//     Route::get('users',function(){
//         return'company users';
//     });
// });

// // - accounts
// // - accounts/admin
// // - accounts/user
// Route::prefix('accounts')->group(function () {
//     Route::get('', function(){
//     return 'accounts index';
//     });
//     Route::get('admin', function(){
//     return 'accounts admin';
//     });
//     Route::get('user', function(){
//         return 'accounts user';
//         });
//     });
//     // - cars
//     // - cars/usa/ford
//     // - cars/usa/tesla
//     // - cars/ger/mercedes
//     // - cars/ger/audi
//     // - cars/ger/volkswagen  
// Route::prefix('cars')->group(function () {
//     Route::get('', function(){
//         return'cars index';
//     });
//     Route::prefix('usa')->group(function () {
//         Route::get('ford',function(){
//             return'cars usa ford';
//   });
//     Route::get('ger/{type}',function($type){
//         return'cars ger '.$type;
//      })->where([
//         'type'=>'[a-zA-Z]+'
//     ]);
// });

// //Another way
// Route::prefix('cars')->group(function () {
//     Route::get('', function(){
//         return'cars index';
//     });
//     Route::get('usa/{type}', function($type){
//        return'cars usa '.$type;
//         })->whereIn('type',['ford', 'tesla']);

//     Route::get('ger/{type}',function($type){
//         return'cars ger '.$type;
//      })->whereIn('type',['mercedes','audi', 'volkswage']);
// });
// });

// fallback
// Route::fallback(function() {
//     return redirect('/');
// });

// View

Route::get('cv', function(){
    return view('cv');
});
// OR
Route::view('CV','CV');

// link... مهم
Route::get('link', function(){
    $url = route('w');
    return "<a href='$url'>Go to welcom</a>";
});
Route::get('welcom', function(){
    return('welcom to laravel');
})->name('w');



#method ..... 
Route::get('login',[ExampleController::class,'login']);

Route::post('data', function(){
    return "Data done";
})->name('data');

// --------
// Route::get('contact', function(){
//     return view("contact");
// });

// contact us
Route::prefix('contactus')->middleware('verified')->group(function(){
Route::get('', [ContactController::class, 'index']);
Route::post('/submit', [ContactController::class, 'submit'])->name('submit');
});

Route::get('contact', [ExampleController::class, 'contact']);
Route::get('test', [ExampleController::class, 'test']);

                                                // method


// Route::post('submit', function(){
//     return "submit";
// })->name('submit');

// cars table
Route::get('cars',[CarController::class, 'index'])->name('cars.index');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('cars/create',[CarController::class, 'create'])->name('cars.create');

    });
    
Route::post('cars',[CarController::class, 'store'])->name('cars.store');
Route::get('cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::put('cars/{id}', [CarController::class, 'update'])->name('cars.update');
Route::get('cars/{id}/show', [CarController::class, 'show'])->name('cars.show');
Route::delete('cars/delete', [CarController::class, 'destroy'])->name('cars.destroy');
Route::get('cars/trashed', [CarController::class, 'showDeleted'])->name('cars.showDeleted');
Route::patch('cars/{id}/restore', [CarController::class, 'restore'])->name('cars.restore');
Route::delete('cars/{id}/forceDelete', [CarController::class, 'forceDeleted'])->name('cars.forceDeleted');

Route::get('uploadform', [ExampleController::class,'uploadform']);
Route::post('upload', [ExampleController::class,'upload'])->name('upload');
Route::get('index', [ExampleController::class,'fashionIndex']);
Route::get('about', [ExampleController::class,'about']);
Route::get('product', [ExampleController::class,'product']);





// classes
Route::get('classes',[ClasseController::class, 'index'])->name('classes.index');
Route::get('classes/adding',[ClasseController::class, 'create'])->name('classes.create');
Route::post('classes',[ClasseController::class, 'store'])->name('classes.store');
Route::get('classes/{id}/edit',[ClasseController::class, 'edit'])->name('classes.edit');
Route::put('classes/{id}',[ClasseController::class, 'update'])->name('classes.update');
Route::get('classes/{id}/show',[ClasseController::class, 'show'])->name('classes.show');
Route::delete('delete',[ClasseController::class, 'destroy'])->name('classes.destroy');
Route::get('classes/trashed',[ClasseController::class, 'showDeleted'])->name('classes.showDeleted');
Route::patch('classes/{id}/restore', [ClasseController::class, 'restore'])->name('classes.restore');
Route::delete('classes/{id}/forceDelete', [ClasseController::class, 'forceDeleted'])->name('classes.forceDeleted');


// fashion
Route::prefix('products')->middleware('verified')->group(function(){
    Route::get('fashion', [ProductController::class,'index'])->name('products.index');
    Route::get('', [ProductController::class,'product_index'])->name('products.proindex');
    Route::get('adding', [ProductController::class,'create'])->name('products.create');
    Route::post('', [ProductController::class,'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class,'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class,'update'])->name('products.update');
    Route::get('/{id}/show', [ProductController::class,'show'])->name('products.show');
    Route::delete('/delete', [ProductController::class,'destroy'])->name('products.destroy');
    Route::get('trashed', [ProductController::class,'showDeleted'])->name('products.showDeleted');
    Route::patch('/{id}/restore', [ProductController::class,'restore'])->name('products.restore');
    Route::delete('/{id}/forceDelete', [ProductController::class,'forceDeleted'])->name('products.forceDeleted');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
