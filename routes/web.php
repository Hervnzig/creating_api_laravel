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

// Route::get('/home', function(){
//     echo Config('services.braintree.secret');
// });



// Route::get('home', function () {
    
// });

// Route::post('home', function () {
    
// });

// Route::delete('home', function () {
    
// });

// Route::put('home', function () {
    
// });

// Route::view('home', function () {
    
// });

// Route::resource('home', function () {
    
// });



// Route::get('/user/{id}/post/{postId}', function($id, $postID){
//     echo "<h1>Your post is with id ".$id ." with a postID of " .$postID ."</h1>";
// }); 


// Route::get('/user/{id?}', function($id = null){
//     echo $id ."<h1>With no ID ";
// }); 


// Route::prefix('admin')->group(function(){
//     Route::get('/', function () {
//         echo "Admin panel";
//     });
//     Route::get('/user', function(){
//     echo "Admin user";
//     });
//     Route::get('/profile', function(){
//         echo "Admin profile";
//     });
//     Route::get('/settings', function(){
//         echo "Admin settings";
//     });
// });



// Route::get('/home/landindpage', function() {
//     echo "Home Page";
// })->name('home');

// Route::get('/page', function() {
//     return redirect ()->route('home');
// });




// Route::get('/home', 'Home2Controller@index');


// Route::get('/contact', 'Home2Controller@index');
// Route::post();


Route::get('/contact', 'Home2Controller@index');
Route::post('/contact', 'Home2Controller@store')->name('contact');


Route::get('/', function(){
    return view('home.index');
});