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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/email-send', [MailController::class, 'sendEmail']);

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

Route::get('/stream', 'HomeController@stream')->name('stream')->middleware('verified');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('courses', 'CourseController');
    Route::resource('roles', 'RoleController');
    Route::resource('lessons', 'LessonController')->except('create');
    Route::get('/lessons/create/{course}', 'LessonController@create')->name('lessons.create');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/admin', function() {
    return view('admin');
})->name('admin');

Route::get('/student', function() {
    return view('student');
})->name('student');

Route::get('/student', 'StudentController@index')->name('student')->middleware('verified');


Route::get('/teacher', function() {
    return view('teacher');
})->name('teacher');

Route::get('/home', function() {
    return view('home');
})->name('home');


// Buat ngirim email
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');


Route::get('/sendEmail', 'SendEmailController@index')->name('emails.test_mail');






