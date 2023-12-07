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

Route::get('/', function () {
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

Route::get('/student', function () {
    return view('student');
})->name('student');

Route::get('/student', 'StudentController@index')->name('student')->middleware('verified');


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
    return view('students.home');
})->name('student');

Route::get('/student/home', function () {
    return view('students.home');
})->name('home-student');

// Route::get('/student/profil-student', function () {
//     return view('students.profil_student');
// })->name('profil-student');
Route::get('/student/profil-student', 'ProfilStudentController@index')->name('profil-student');

Route::get('/student/profil/edit-profil', function () {
    return view('students.edit_profil');
})->name('edit-profil');

Route::get('/student/kalender', function () {
    return view('students.kalender');
})->name('kalender');

Route::get('/student/tugas', function () {
    return view('students.tugas');
})->name('tugas');

// Route::get('/student/nilai', function () {
//     return view('students.nilai');
// })->name('nilai');
Route::get('student/nilai', 'NilaiController@index')->name('nilai');

Route::get('/student/home/detail', function () {
    return view('students.home_detail');
})->name('detail');

Route::get('/student/tambah-kelas', function () {
    return view('students.tambah-kelas');
})->name('tambah-kelas');

Route::get('/student/courses', function () {
    return view('students.courses');
})->name('student-courses');
// Akhir Route Student


// OPEN ROUTE ADMIN //
Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');
// Route::get('/stream', 'StreamController@index')->name('stream');
Route::get('/admin/about', 'AboutController@index')->name('admin.about');
Route::get('/admin/profile', 'ProfileController@index')->name('admin.profile');
Route::get('/admin/kelas-umum/halaman', 'KelasUmumController@showKelasUmum')->name('admin.kelas-umum.halaman');
Route::get('/admin/kelas-programming/halaman', 'KelasProgrammingController@showKelasProgramming')->name('admin/kelas-programming/halaman');
Route::get('/admin/kelas-tambahan/halaman', 'KelasTambahanController@showKelasTambahan')->name('admin/kelas-tambahan/halaman');
Route::get('/admin/instructur-profil/halaman', 'InstructurProfilController@index')->name('admin/instructur-profil/halaman');
Route::get('/admin/instructur-kelas/halaman', 'InstructurKelasController@index')->name('admin/instructur-kelas/halaman');
Route::get('/admin/peserta-profil/halaman', 'PesertaProfilController@index')->name('admin/peserta-profil/halaman');
Route::get('/admin/peserta-kelas/halaman', 'PesertaKelasController@index')->name('admin/peserta-kelas/halaman');
// 
// Route ke data Mahasiswa
Route::get('/admin/mahasiswa/data_peserta', 'DataPesertaController@index')->name('data_peserta');

// Route::get('/admin.reports', 'ReportsController@index')->name('admin.reports');
// Route::get('/admin.settings', 'SettingsController@index')->name('admin.settings');

// ----------
// DAFTAR UNTUK KELAS //
// kelas umum
// Route::get('/daftar-jurusan', 'JurusanController@index')->name('daftarJurusan');
// // Rute untuk menampilkan view create jurusan
// Route::get('/jurusan/create', 'JurusanController@create')->name('createJurusan');
// // Rute untuk menyimpan jurusan (pastikan menggunakan metode POST)
// Route::post('/jurusan/create', 'JurusanController@store')->name('storeJurusan');
// // Rute untuk menampilkan view edit jurusan
// Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('editJurusan');
// // Rute untuk menyimpan perubahan jurusan (pastikan menggunakan metode POST)
// Route::post('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('updateJurusan');
// // Rute untuk menghapus jurusan (pastikan menggunakan metode DELETE atau POST)
// Route::delete('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('deleteJurusan');

//----------


// Daftar Jurusan --( UNTUK DATA KELAS)
// Route::get('/daftar-jurusan', 'JurusanController@index')->name('daftarJurusan');
// Route::get('/jurusan/create', 'JurusanController@create')->name('createJurusan');
// Route::post('/jurusan/create', 'JurusanController@store')->name('storeJurusan');
// Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('editJurusan');
// Route::post('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('updateJurusan');
// Route::delete('/jurusan/{jurusan}/delete', 'JurusanController@destroy')->name('deleteJurusan');

// Daftar Mata Kuliah --( UNTUK DATA INSTRUKTUR)
// Route::get('/daftar-mapel', 'MataPelajaranController@index')->name('daftarMapel');
// Route::get('/mapel/create', 'MataPelajaranController@create')->name('createMapel');
// Route::post('/mapel/create', 'MataPelajaranController@store')->name('storeMapel');
// Route::get('/mapel/{mapel}/edit', 'MataPelajaranController@edit')->name('editMapel');
// Route::post('/mapel/{mapel}/edit', 'MataPelajaranController@update')->name('updateMapel');
// Route::delete('/mapel/{mapel}/delete', 'MataPelajaranController@destroy')->name('deleteMapel');

// Daftar Mata Kuliah --( UNTUK DATA PESERTA)
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

Route::get('/teacher/kalender', function () {
    return view('teacher.kalender_teacher');
})->name('kalender2');

Route::get('/teacher/anggota', function () {
    return view('teacher.anggota_teacher');
})->name('anggota');

Route::get('/teacher/nilai', function () {
    return view('teacher.nilai_teacher');
})->name('nilai.teacher');
// Route teacher


Route::resource('/eventpage', 'EventController', ['as'=> 'eventpage']);
Route::get('/eventpage', 'EventController@index')->name('admin.eventpage');
//Route::get('addeventurl','EventController@create')->name('EventController.store');
Route::get('addeventurl','EventController@display')->name('EventController.store');
Route::post('addeventurl/store','EventController@store')->name('addevent.store');

Route::get('editeventurl','EventController@show');
Route::get('deleteeventurl','EventController@show');

Route::post('editeventurl/update/{id}','EventController@update')->name('editform_update');

Route::get('deleteeventurl/{id}','EventController@destroy');