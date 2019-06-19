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
    return view('index');
});


/**
 * 検索結果
 */
Route::prefix('search')->group(function(){
	// 医療機関検索結果ページ（/search/）
	Route::name('index')->get('/', 'SearchController@hospital');

	// 検査コース検索結果ページ（/search/course）
	Route::name('/course')->get('/course', 'SearchController@course');
});

/**
 * 検索結果（正規化ＵＲＬ）
 */
Route::prefix('{checkupCategory}')->group(function(){
	// 各検査カテゴリのトップページ（/dock/）
	Route::name('index')->get('/', 'SearchHospitalController@index')->where(['checkupCategory' => env('COURSE_CAT_STRING')]);

	// 各検査カテゴリの検査コース検索結果（/dock/course/）
	Route::name('/course')->get('/course', 'SearchCourseController@index');

	Route::prefix('{pref}')->group(function(){
		// 都道府県医療機関検索結果（/dock/tokyo/）
		Route::name('index')->get('/', 'SearchHospitalController@pref')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'pref' => '^[a-z]+$']);

		// 都道府県検査コース検索結果（/dock/tokyo/course/）
		Route::name('/course')->get('/course', 'SearchCourseController@pref')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'pref' => '^[a-z]+$']);

		Route::prefix('{city}')->group(function(){
			// 市区町村医療機関検索結果（/dock/tokyo/nakano/）
			Route::name('index}')->get('/', 'SearchHospitalController@city')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'city' => '^(?!course)[a-z]+$']);

			// 市区町村検査コース検索結果（/dock/tokyo/nakano/course/）
			Route::name('/course')->get('/course', 'SearchCourseController@city')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'city' => '^(?!course)[a-z]+$']);
		});

		Route::prefix('{station}')->group(function(){
			// 駅医療機関検索結果（/dock/tokyo/111/）
			Route::name('index}')->get('/', 'SearchHospitalController@station')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'station' => '^[0-9]+$']);

			// 駅検査コース検索結果（/dock/tokyo/111/course/）
			Route::name('/course')->get('/course', 'SearchCourseController@station')->where(['checkupCategory' => env('COURSE_CAT_STRING'), 'station' => '^[0-9]+$']);
		});
	});
});


/**
 * 医療機関ページ
 */
Route::prefix('detail_hospital/{dockID}')->group(function(){
	// トップページ
	Route::name('hosIndex')->get('/', 'HospitalController@index');

	// 予約カレンダー一覧
	Route::name('/calendar')->get('/calendar', 'HospitalController@calendar');

	// アクセス
	Route::name('/access')->get('/access', 'HospitalController@access');

	// 写真・動画・インタビュー
	Route::name('/photo')->get('/photo', 'HospitalController@photo');

	Route::prefix('course')->group(function(){
		// コース一覧
		Route::name('index')->get('/', 'HospitalController@courseIndex');

		// コース詳細
		Route::name('courseID')->get('/{courseID}','HospitalController@course');
	});


	// 301リダイレクト設定（旧サイトより）
    Route::redirect('/basic.html', './', 301);
    Route::redirect('/course.html', './course/', 301);
    Route::redirect('/calendar.html', './calendar/', 301);
    Route::redirect('/photo.html', './photo/', 301);
    Route::get('/detail/{courseID}.html', 'HospitalController@redirectCourse');

});


Route::get('/sitemap', function () {
    return view('sitemap.index');
})->name('sitemap');

Route::get('/company', function () {
    return view('company.index');
})->name('company');

Route::get('/law', function () {
    return view('law.index');
})->name('law');

Route::get('/privacy', function () {
    return view('privacy.index');
})->name('privacy');

Route::get('/privacy/publication', function () {
	return view('privacy.publication.index');
})->name('publication');

Route::get('/assessment', function () {
    return view('assessment.index');
})->name('assessment');

Route::get('/agreement', function () {
	return view('agreement.index');
})->name('assessment');


Route::get('/cp', function () {
    return view('cp.index');
})->name('cp');

Route::get('/first', function () {
    return view('first.index');
})->name('first');

Route::get('/guide', function () {
    return view('guide.index');
})->name('guide');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::post('/contact/store', 'ContactController@store');

Route::post('/contact/confirm', 'ContactController@confirm');

Route::get('/keisai', function () {
    return view('keisai.index');
})->name('keisai');

Route::post('/keisai/store', 'KeisaiController@store');

Route::post('/keisai/confirm', 'KeisaiController@confirm');

Route::get('/rakuraku', 'RakurakuController@index');

Route::post('/rakuraku/confirm', 'RakurakuController@confirm');

Route::post('/rakuraku/complete', 'RakurakuController@complete');

Route::get('/wp', function () {
    return view('wp.index');
})->name('wp');

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/login', function() {
    return view('login.index');
});

Route::get('/signup', function() {
    return view('login.signup');
});

Route::get('/mypage', function() {
    return view('mypage.index');
});

Route::get('/mypage/accept', function() {
    return view('mypage.accept');
});

Route::get('/mypage/favorite', function() {
    return view('mypage.favorite');
});

Route::get('/mypage/information', function() {
    return view('mypage.information');
});

