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

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/stream', 'HomeController@stream')->name('stream')->middleware('verified');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('courses', 'CourseController');
    Route::resource('roles', 'RoleController');
    Route::resource('lessons', 'LessonController')->except('create');
    Route::get('/lessons/create/{course}', 'LessonController@create')->name('lessons.create');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/teacher', function () {
    return view('teacher');
})->name('teacher');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Awal Route Student
Route::get('/student', function () {
    return view('students.student');
})->name('student');

Route::get('/home', function () {
    return view('students.home_student');
})->name('home');

Route::get('/nilai', function () {
    return view('students.nilai_student');
})->name('nilai');

Route::get('/kalender', function () {
    return view('students.kalender_student');
})->name('kalender');

Route::get('/tugas', function () {
    return view('students.tugas_student');
})->name('tugas');

Route::get('/absensi', function () {
    return view('students.absensi_student');
})->name('absensi');

Route::get('/keuangan', function () {
    return view('students.keuangan_student');
})->name('keuangan');
// Akhir Route Student


// ROUTE ADMIN
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stream', 'StreamController@index')->name('stream');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/data-jurusan', 'DataJurusanController@index')->name('data-jurusan');
Route::get('/data-mata-pelajaran', 'DataMataPelajaranController@index')->name('data-mata-pelajaran');
Route::get('/data-mahasiswa', 'DataMahasiswaController@index')->name('data-mahasiswa');
Route::get('/data-user-admin', 'DataUserAdminController@index')->name('data-user-admin');
Route::get('/reports', 'ReportsController@index')->name('reports');
Route::get('/settings', 'SettingsController@index')->name('settings');


// ROUTE ADMIN