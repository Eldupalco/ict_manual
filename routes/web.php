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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth','admin']], function() {

//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     }); 

//     Route::get('/register-roles','App\Http\Controllers\MyAdmin\DashboardController@registered');
//     Route::get('/role-edit/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerEdit');
//     Route::put('/role-register-update/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerUpdate');
//     Route::delete('/role-delete/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerDelete');
    
//     Route::get('/book','App\Http\Controllers\MyAdmin\BookController@indexBook');
//     Route::post('/save-book', 'App\Http\Controllers\MyAdmin\BookController@saveBook');
//     Route::get('/edit-book/{id}', 'App\Http\Controllers\MyAdmin\BookController@editBook');
//     Route::put('/update-book/{id}','App\Http\Controllers\MyAdmin\BookController@updateBook');
//     Route::delete('/delete-book/{id}', 'App\Http\Controllers\MyAdmin\BookController@deleteBook');


//     Route::get('/faculty','App\Http\Controllers\MyAdmin\FacultyController@indexFaculty');
//     Route::post('/save-faculty', 'App\Http\Controllers\MyAdmin\FacultyController@saveFaculty');
//     Route::get('/edit-faculty/{id}', 'App\Http\Controllers\MyAdmin\FacultyController@editFaculty');
//     Route::put('/update-faculty/{id}','App\Http\Controllers\MyAdmin\FacultyController@updateFaculty');
//     Route::delete('/delete-faculty/{id}', 'App\Http\Controllers\MyAdmin\FacultyController@deleteFaculty');


//     Route::get('/student','App\Http\Controllers\MyAdmin\StudentController@indexStudent');
//     Route::post('/save-student', 'App\Http\Controllers\MyAdmin\StudentController@saveStudent');
//     Route::delete('/delete-student/{id}', 'App\Http\Controllers\MyAdmin\StudentController@deleteStudent');

// });

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'admin'], function() {

        
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    }); 

    Route::get('/register-roles','App\Http\Controllers\MyAdmin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerEdit');
    Route::put('/role-register-update/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerUpdate');
    Route::delete('/role-delete/{id}', 'App\Http\Controllers\MyAdmin\DashboardController@registerDelete');
    
    Route::get('/book','App\Http\Controllers\MyAdmin\BookController@indexBook');
    Route::post('/save-book', 'App\Http\Controllers\MyAdmin\BookController@saveBook');
    Route::get('/edit-book/{id}', 'App\Http\Controllers\MyAdmin\BookController@editBook');
    Route::put('/update-book/{id}','App\Http\Controllers\MyAdmin\BookController@updateBook');
    Route::delete('/delete-book/{id}', 'App\Http\Controllers\MyAdmin\BookController@deleteBook');


    Route::get('/faculty','App\Http\Controllers\MyAdmin\FacultyController@indexFaculty');
    Route::post('/save-faculty', 'App\Http\Controllers\MyAdmin\FacultyController@saveFaculty');
    Route::get('/edit-faculty/{id}', 'App\Http\Controllers\MyAdmin\FacultyController@editFaculty');
    Route::put('/update-faculty/{id}','App\Http\Controllers\MyAdmin\FacultyController@updateFaculty');
    Route::delete('/delete-faculty/{id}', 'App\Http\Controllers\MyAdmin\FacultyController@deleteFaculty');


    Route::get('/student','App\Http\Controllers\MyAdmin\StudentController@indexStudent');
    Route::post('/save-student', 'App\Http\Controllers\MyAdmin\StudentController@saveStudent');
    Route::get('/edit-student/{id}', 'App\Http\Controllers\MyAdmin\StudentController@editStudent');
    Route::put('/update-student/{id}','App\Http\Controllers\MyAdmin\StudentController@updateStudent');
    Route::delete('/delete-student/{id}', 'App\Http\Controllers\MyAdmin\StudentController@deleteStudent');

    });

    Route::group(['middleware' => 'student'], function() {

        Route::get('/home', function () {
            return view('home');
        });  

        Route::get('/home','App\Http\Controllers\Request\RequestBookController@indexBook');
        Route::get('/request-book/{id}', 'App\Http\Controllers\Request\RequestBookController@requestBook');
        Route::post('/borrow-books', 'App\Http\Controllers\Request\RequestBookController@borrowBook');
    });

});




