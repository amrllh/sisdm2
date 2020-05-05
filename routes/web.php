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


// GET, POST, PUT, PATCH

// login

//Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'UserController@showlogin');
    Route::get('/login', 'UserController@showlogin');
    Route::post('/login', 'UserController@login');
    Route::get('/register', 'UserController@create');
    Route::post('/registrasi', 'UserController@store');
    Route::get('/logout', 'UserController@logout');
//});


Route::group(['middleware' => ['auth']], function () {
    
    // dashboard
    Route::get('/dashboard', 'PagesController@dashboard');
    Route::get('/dashboardpengajar', 'PagesController@dashboardpengajar');
    Route::get('/dashboardpimpinan', 'PagesController@dashboardpimpinan');
    Route::get('/dashboardwarga', 'PagesController@dashboardwarga');
    
    // ======================================================= H A L A M A N  W A R G A ============================================================= //
    // warga - data pribadi warga
    Route::get('/wargadatapriwa', 'WargaController@showinwarga');
    
    // warga - nilai kinerja
    Route::get('/wargapenilaian', 'PerformanceController@showinwarga');

    // ======================================================= H A L A M A N  A D M I N ============================================================= //
    Route::resource('warga', 'WargaController');
    Route::resource('leader', 'LeaderController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('admin', 'AdminController');
    Route::resource('skill', 'SkillController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('performance', 'PerformanceController');
    
    // admin - warga binaan
    Route::get('/datapribadi', 'WargaController@index');
    // Route::get('/warga/create', 'WargaController@create');
    // Route::post('/skill/create', 'SkillController@create');
    // Route::get('/warga/{warga}', 'WargaController@show');
    // Route::post('/warga', 'WargaController@store');
    // Route::delete('/warga/{warga}', 'WargaController@destroy');
    // Route::get('/warga/{warga}/edit', 'WargaController@edit');
    // Route::patch('/warga/{warga}', 'WargaController@update');
    
    // admin - data pimpinan
    Route::get('/datapimpinan', 'LeaderController@index');
    Route::get('/leader/{leader}', 'LeaderController@show');
    
    // admin - data keahlian
    Route::get('/datakeahlian', 'SkillController@index');
    Route::get('/skill/create/{nik}', 'SkillController@create');
    
    // admin - data pengalaman kerja
    Route::get('/datapengalaman', 'ExperienceController@index');
    Route::get('/experience/create/{nik}', 'ExperienceController@create');
    
    // admin - nilai kinerja
    Route::get('/nilaikinerja', 'PerformanceController@index');

    // admin - cetak sertifikat
    Route::get('/cetaksertifikat', 'CertificateController@index');
    Route::get('/sertifikat/{sertifikat}', 'CertificateController@cetak');
    
    // admin - data pengajar
    Route::get('/datapengajar', 'TeacherController@index');
    
    // admin - data admin
    Route::get('/dataadmin', 'AdminController@index');
    
    // admin - data login
    Route::get('/datalogin', 'UserController@index');
    Route::get('/datalogin/{datalogin}', 'UserController@show');
    Route::delete('/datalogin/{datalogin}', 'UserController@destroy');
    Route::get('/datalogin/{datalogin}/edit', 'UserController@edit');
    Route::patch('/datalogin/{datalogin}', 'UserController@update');
    Route::delete('/datalogin/{datalogin}', 'UserController@destroy');
    
    // admin - data keterampilan
    Route::get('/dataketerampilan', 'CourseController@index');
    Route::post('/dataketerampilan', 'CourseController@store');
    Route::get('/dataketerampilan/{dataketerampilan}', 'CourseController@show');
    Route::patch('/dataketerampilan/{dataketerampilan}', 'CourseController@update');
    Route::delete('/dataketerampilan/{dataketerampilan}', 'CourseController@destroy');

    // admin - data role
    Route::get('/datarole', 'GroupController@index');
    Route::post('/datarole', 'GroupController@store');
    Route::get('/datarole/{datarole}', 'GroupController@show');
    Route::patch('/datarole/{datarole}', 'GroupController@update');
    Route::delete('/datarole/{datarole}', 'GroupController@destroy');

    // admin - data master keahlian
    Route::get('/datamasterexpertise', 'MasterExpertiseController@index');
    Route::post('/datamasterexpertise', 'MasterExpertiseController@store');
    Route::get('/datamasterexpertise/{datamasterexpertise}', 'MasterExpertiseController@show');
    Route::patch('/datamasterexpertise/{datamasterexpertise}', 'MasterExpertiseController@update');
    Route::delete('/datamasterexpertise/{datamasterexpertise}', 'MasterExpertiseController@destroy');

    // admin - data status
    Route::get('/datastatus', 'StatusController@index');
    Route::post('/datastatus', 'StatusController@store');
    Route::get('/datastatus/{datastatus}', 'StatusController@show');
    Route::patch('/datastatus/{datastatus}', 'StatusController@update');
    Route::delete('/datastatus/{datastatus}', 'StatusController@destroy');
    
    
    // ======================================================= H A L A M A N  P E N G A J A R ======================================================= //
    
    // pengajar - data pribadi warga
    Route::get('/pengajardatapriwa/{pengajardatapriwa}', 'WargaController@showinteacher');
    Route::get('/pengajardatapriwa', 'WargaController@indexinteacher');
    Route::get('/pengajarprofil', 'TeacherController@show');
    
    // pengajar - penilaian
    Route::get('/pengajarpenilaian', 'PerformanceController@index1');
    Route::get('/penilaiankinerja/{penilaiankinerja}', 'PerformanceController@penilaian');
    Route::get('/penilaiankinerja/{penilaiankinerja}/penilaian', 'PerformanceController@penilaian');
    Route::get('/penilaiankinerja/{penilaiankinerja}/ubahpenilaian', 'PerformanceController@ubahpenilaian');
    Route::patch('/penilaiankinerja/{penilaiankinerja}', 'PerformanceController@nilai');

    // pengajar - absensi
    Route::get('/pengajarabsensi', 'AbsenController@index');
    Route::post('/absen', 'AbsenController@absen');
    Route::get('/absen/{tanggal}/{pelatihan_id}', 'AbsenController@lihatabsen');
    Route::post('/absenmasuk', 'AbsenController@absenmasuk');
    
    // pengajar - profil
    Route::get('/pengajarprofil', 'TeacherController@indexteacher');
    Route::get('/pengajarprofil/{pengajarprofil}/edit', 'TeacherController@editteacher');
    Route::patch('/pengajarprofil/{pengajarprofil}', 'TeacherController@updateteacher');
    
    // ======================================================= H A L A M A N  P I M P I N A N ======================================================= //
    
    // pimpinan - datapriwa
    Route::get('/pimpinandatapriwa', 'WargaController@indexinleader');
    Route::get('/pimpinandatapriwa/{pimpinandatapriwa}', 'WargaController@showinleader');
    Route::get('/pimpinanlaporan','WargaController@cetakinleader');
    
    // pimpinan - laporan
    Route::get('/lapdapriwa', 'ReportController@lapdapriwa');
    Route::get('/lapkinerja', 'ReportController@lapkinerja');
    Route::get('/lapwarga/{lapwarga}', 'ReportController@lapwarga');

    // pimpinan - kelulusan 
    Route::get('/pimpinankelulusan', 'GraduateController@datalulus');
    Route::get('/pimpinankelulusan/{pimpinankelulusan}/lulus', 'GraduateController@lulus');
    Route::get('/pimpinankelulusan/{pimpinankelulusan}/ulang', 'GraduateController@ulang');
    Route::get('/pimpinankelulusan/{pimpinankelulusan}/tidaklulus', 'GraduateController@tidaklulus');
    
    // pimpinan - profil
    Route::get('/pimpinanprofil', 'LeaderController@indexleader');
    Route::get('/pimpinanprofil/{pimpinanprofil}/edit', 'LeaderController@editleader');
    Route::patch('/pimpinanprofil/{pimpinanprofil}', 'LeaderController@updateleader');
});







// <script src="https://kit.fontawesome.com/be8dc65be2.js" crossorigin="anonymous"></script>


// etc
// Route::get('/lapdapriwa/cetak', 'ReportController@lapdapriwacetak');
// Route::get('/lapkinerja/cetak', 'ReportController@lapkinerjacetak');
// login
// Route::get('/sessionteacher/{id}', function ($id) {
//     session()->put('idteacher',$id);
// });