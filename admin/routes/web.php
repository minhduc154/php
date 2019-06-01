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
    return view('welcome');
});




Route::get('home', function() { 
    return view('layout/index');
});


Route::get('login','UsersController@getLogin');
Route::post('login','UsersController@postLogin');
Route::post('signup','UsersController@postAdd2');
Route::get('logout', function() {
    //Auth::logout();
    return view('log');
});


Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function() {
    //

	Route::group(['prefix' => 'user'], function() {
	    Route::get('list','UsersController@getList');

	    Route::get('edit{id}','UsersController@getEdit');
	    Route::post('edit{id}','UsersController@postEdit');

	    Route::get('add','UsersController@getAdd');
	    Route::post('add','UsersController@postAdd');

	    Route::get('del{id}','UsersController@getDel');

	    Route::get('home3','FrontController@home');
	
	});

	Route::group(['prefix'=>'job'],function(){
		Route::get('list','JobController@getList');
		Route::get('listForCompany','JobController@getListForCompany');

		Route::get('edit/{id}','JobController@getEdit');
		Route::post('edit/{id}','JobController@postEdit');

		Route::get('add','JobController@getAdd');
		Route::post('add','JobController@postAdd');

		Route::get('delete/{id}','JobController@getDelete');

		Route::post('search','JobController@getSearch');
		Route::get('infoJob{id}','JobController@infoJob');

		Route::get('apply{id}','FrontController@apply' );
		
	});


	Route::group(['prefix'=>'company'],function(){
		Route::get('list','CompanyController@getList');

		Route::get('edit/{id}','CompanyController@getEdit');
		Route::post('edit/{id}','CompanyController@postEdit');

		Route::get('add','CompanyController@getAdd');
		Route::post('add','CompanyController@postAdd');

		Route::get('delete/{id}','CompanyController@getDelete');
	});


	Route::group(['prefix'=>'topic'],function(){
		Route::get('list','TopicController@getList');
		Route::get('listForStudent','TopicController@getListForStudent');
		Route::get('listForCompany','TopicController@getListForCompany');
		Route::get('edit/{id}','TopicController@getEdit');
		Route::post('edit/{id}','TopicController@postEdit');
		Route::get('add','TopicController@getAdd');
	});


	Route::group(['prefix'=>'news'],function(){
		Route::get('list','NewsController@getList');

		Route::get('edit/{id}','NewsController@getEdit');
		Route::post('edit/{id}','NewsController@postEdit');

		Route::get('add','NewsController@getAdd');
		Route::post('add','NewsController@postAdd');

		Route::get('delete/{id}','NewsController@getDelete');

		Route::get('infoNews{id}','NewsController@infoNews');

	});


	Route::group(['prefix'=>'newstype'],function(){
		//
		Route::get('list','NewsTypeController@getList');

		Route::get('edit/{id}','NewsTypeController@getEdit');
		Route::post('edit/{id}','NewsTypeController@postEdit');

		Route::get('add','NewsTypeController@getAdd');
		Route::post('add','NewsTypeController@postAdd');

		Route::get('delete/{id}','NewsTypeController@getDelete');
	});
	

	Route::group(['prefix'=>'student'],function(){
		//
		Route::get('list','StudentController@getList');

		Route::get('edit/{id}','StudentController@getEdit');
		Route::post('edit/{id}','StudentController@postEdit');

		Route::get('add','StudentController@getAdd');
		Route::post('add','StudentController@postAdd');

		Route::get('delete/{id}','StudentController@getDelete');

		Route::post('search','StudentController@getSearch');
	});

	Route::group(['prefix'=>'filestudent'],function(){
		//
		Route::get('list','FileStudentController@getList');

		Route::get('edit/{id}','FileStudentController@getEdit');
		Route::post('edit/{id}','FileStudentController@postEdit');

		Route::get('add','FileStudentController@getAdd');
		Route::post('add','FileStudentController@postAdd');

		Route::get('delete/{id}','FileStudentController@getDelete');


		Route::post('search','FileStudentController@getSearch');
		Route::get('infoStudent{id}','FileStudentController@infoStudent');



	});
});




Route::get('front','FrontController@home');
Route::get('about', function() {
    return view('utt/about/about');
});
Route::get('blog','FrontController@blog');
Route::get('contact', function() {
    return view('utt/contact/contact');
});



