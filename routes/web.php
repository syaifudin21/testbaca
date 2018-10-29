<?php


Route::get('/', function () {
	if (Auth::check()) {
		if (Auth::user()->jabatan=='Admin') {
			return redirect('/home');
        } else {
			return redirect('/test');
        }
	}else {
	    return view('welcome');
	};
});

Auth::routes();

// halaman admin
// ================================================================= bacaan
Route::get('/home', 'HomeController@index');
//tambah bacaan
Route::get('/tambah', 'HomeController@tambah');
Route::post('/tambah', 'HomeController@insert');
//spam
Route::get('/spam', 'HomeController@spam');
//membaca per id
Route::get('/baca/{id}', 'HomeController@read');
//update 
Route::get('/baca/{id}/edit', 'HomeController@edit');
Route::put('/baca/{id}', 'HomeController@update');
//hapus
Route::delete('/baca/{id}', 'HomeController@delete');
Route::delete('/restore/{id}', 'HomeController@restore');
Route::delete('/hapus/{id}', 'HomeController@destroy');
// ================================================================= soal

//tambah soal
Route::get('/tambahsoal/{id}', 'SoalController@tambah');
Route::post('/tambahsoal/{id}', 'SoalController@insert');
//edit soal 
Route::get('/editsoal/{id}', 'SoalController@edit');
Route::put('/editsoal/{id}', 'SoalController@update');
// hapus soal
Route::delete('/hapussoal/{id}/{idb}', 'SoalController@delete');

// ================================================================= Daftar Member
Route::post('/daftarmember/{id}', 'DaftarMemberController@authenticate');

// ================================================================= Mulai Test
Route::post('/test/{id_bacaan}', 'NilaiBacaController@tambah');
Route::get('/test/{id_bacaan}/{id}/{waktumulai}', 'NilaiBacaController@mulai');
Route::post('/test/{id_bacaan}/{id}/{waktumulai}', 'NilaiBacaController@selesaibaca');
Route::get('/test/{id_bacaan}/{id}/{waktumulai}/{waktuselesai}', 'NilaiBacaController@soal');
Route::post('/test/{id_bacaan}/{id}/{waktumulai}/{waktuselesai}', 'NilaiBacaController@selesaisoal');
Route::get('/test/{id_bacaan}/{id}/{waktumulai}/{waktuselesai}/{benar}/{salah}/{kosong}', 'NilaiBacaController@hasil');

// ================================================================= perkembangan
Route::get('/perkembangan/', 'memberController@perkembangan');

// ================================================================= member
Route::get('/test', 'MemberController@index');
// Route::get('/test/{id}/{soal}', 'MemberController@singlesoal');
