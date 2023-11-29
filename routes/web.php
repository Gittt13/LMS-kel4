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

Route::get('/', function() {
    return view('home');
});
// Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/stream', 'HomeController@stream')->name('stream');

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

Route::get('/student', function() {
    return view('student');
})->name('student');

Route::get('/student', 'StudentController@index')->name('student')->middleware('verified');


Route::get('/teacher', function() {
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

Route::get('/student/home', function () {
    return view('students.home_student');
})->name('home.student');

Route::get('/student/kalender', function () {
    return view('students.kalender_student');
})->name('kalender');

Route::get('/student/tugas', function () {
    return view('students.tugas_student');
})->name('tugas');

Route::get('/student/nilai', function () {
    return view('students.nilai_student');
})->name('nilai');
// Akhir Route Student


// ROUTE ADMIN
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/stream', 'StreamController@index')->name('stream');
Route::get('/admin.about', 'AboutController@index')->name('admin.about');
Route::get('/admin.data-jurusan', 'DataJurusanController@index')->name('admin.data-jurusan');
Route::get('/admin.data-mata-Kuliah', 'DataMataKuliahController@index')->name('admin.data-mata-kuliah');
Route::get('/admin.data-mahasiswa', 'DataMahasiswaController@index')->name('admin.data-mahasiswa');
Route::get('/admin.data-dosen', 'DataDosenController@index')->name('admin.data-dosen');
Route::get('/admin.reports', 'ReportsController@index')->name('admin.reports');
Route::get('/admin.settings', 'SettingsController@index')->name('admin.settings');

// ROUTE ADMIN