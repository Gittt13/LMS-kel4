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

Route::get('admin', function () {
    return view('admin.about');
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
    return view('students.home');
})->name('home');

Route::get('/student/home', function () {
    return view('students.home');
})->name('home-student');

Route::get('/student/kalender', function () {
    return view('students.kalender');
})->name('kalender');

Route::get('/student/tugas', function () {
    return view('students.tugas');
})->name('tugas');

Route::get('/student/nilai', function () {
    return view('students.nilai');
})->name('nilai');

Route::get('/student/home/detail', function () {
    return view('students.home_detail');
})->name('detail');

Route::get('/student/tambah-kelas', function () {
    return view('students.tambah-kelas');
})->name('tambah-kelas');
// Akhir Route Student


// OPEN ROUTE ADMIN
Route::get('/admin.dashboard', 'DashboardController@index')->name('admin.dashboard');
// Route::get('/stream', 'StreamController@index')->name('stream');
Route::get('/admin.about', 'AboutController@index')->name('admin.about');
Route::get('/admin.profile', 'ProfileController@index')->name('admin.profile');
Route::get('/admin.data-jurusan', 'DataJurusanController@index')->name('admin.data-jurusan');
Route::get('/admin.data-mata-Kuliah', 'DataMataKuliahController@index')->name('admin.data-mata-kuliah');
Route::get('/admin.data-mahasiswa', 'DataMahasiswaController@index')->name('admin.data-mahasiswa');
Route::get('/admin.data-dosen', 'DataDosenController@index')->name('admin.data-dosen');
Route::get('/admin.reports', 'ReportsController@index')->name('admin.reports');
Route::get('/admin.settings', 'SettingsController@index')->name('admin.settings');

// Daftar Jurusan
// Route::get('/daftar-jurusan', 'JurusanController@index')->name('daftarJurusan');
// Route::get('/jurusan/create', 'JurusanController@create')->name('createJurusan');
// Route::post('/jurusan/create', 'JurusanController@store')->name('storeJurusan');
// Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('editJurusan');
// Route::post('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('updateJurusan');
// Route::delete('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('deleteJurusan');

// // Daftar Mata Kuliah
// Route::get('/daftar-mapel', 'MataPelajaranController@index')->name('daftarMapel');
// Route::get('/mapel/create', 'MataPelajaranController@create')->name('createMapel');
// Route::post('/mapel/create', 'MataPelajaranController@store')->name('storeMapel');
// Route::get('/mapel/{mapel}/edit', 'MataPelajaranController@edit')->name('editMapel');
// Route::post('/mapel/{mapel}/edit', 'MataPelajaranController@update')->name('updateMapel');
// Route::delete('/mapel/{mapel}/delete', 'MataPelajaranController@destroy')->name('deleteMapel');



// CLOSE ROUTE ADMIN

// Route teacher

        Route::get('/teacher/home', function () {
            return view('teacher.home_teacher');
        })->name('home.teacher');

        Route::get('/teacher/profile', function () {
            return view('teacher.profile_teacher');
        })->name('profile');

        Route::get('/teacher/kelas', function () {
            return view('teacher.kelas_teacher');
        })->name('kelas');

        Route::get('/teacher/absensi', function () {
            return view('teacher.absensi_teacher');
        })->name('absensi');

        Route::get('/teacher/kelas/tugas', function () {
            return view('teacher.tugas_teacher');
        })->name('tugas.teacher');
// Route teacher
