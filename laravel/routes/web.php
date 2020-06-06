<?php

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
Route::get('/', "HomePageController@index");
Route::get('/about', "AboutController@index");
Route::get('/contact', "ContactController@index");
Route::get('/services', "ServicesController@index");


Route::resource('movies', 'MoviesController');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('insert_json_into_database', function(){
    $json = file_get_contents(storage_path('https://raw.githubusercontent.com/cipriancozma/movies-list/master/db.json'));
    $moviesObj = json_decode($json, true);
    foreach($moviesObj as $movie){
        foreach($movie as $key => $value) {
            $insertArr[str_slug($key, '_')] = $value;
        }
        DB::table('movies')->insert($insertArr);
    }
    dd("Added data in movies table");
});
