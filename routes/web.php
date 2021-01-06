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

Route::post('/blog/{post}/comment', 'CommentsController@store')->name('blog.comments');


Route::group(['prefix' => '{locale}'], function() {

	Route::get('/' ,'BlogController@index')->name('blog');

	Route::get('/blog/search/', 'searchController@index')->name('search');


Route::get('/{category}', 'latestArticlesController@index')->name('latestArticles');

Route::get('/blog/contact', 'contactController@index')->name('contact');


Route::get('/blog/{category}/{post}', 'BlogController@show')->name('blog.show');

Route::get('/category/{category}', 'BlogController@category')->name('category');

Route::get('/blog/author/{author}', 'BlogController@author')->name('author');

Route::get('/blog/tag/{tag}', 'BlogController@tag')->name('tag');


// Route::resource('backend/blog', 'Backend\BlogController');

});

// End of language prefix

Route::group(['prefix' => 'auth/admin/panel','middleware' => 'web'], function () {

    Auth::routes();

		//Auth::routes();
		Route::get('/home', 'Backend\HomeController@index')->name('home');
		Route::get('/edit-account', 'Backend\HomeController@edit');
		Route::put('/edit-account', 'Backend\HomeController@update');


		Route::put('/backend/blog/restore/{blog}', [
			'uses' => 'Backend\BlogController@restore',
			'as' => 'backend.blog.restore'
		]);

		Route::delete('/backend/blog/force-destroy/{blog}', [
			'uses' => 'Backend\BlogController@forceDestroy',
			'as' => 'backend.blog.force-destroy'
		]);
		/* -------- Posts Routes -----------------*/

		Route::post('/backend/blog', 'Backend\BlogController@store')->name('backend.blog.store');
		Route::get('/backend/blog', 'Backend\BlogController@index')->name('backend.blog.index');
		Route::get('/backend/blog/create', 'Backend\BlogController@create')->name('backend.blog.create');

		Route::patch('/backend/blog/{blog}', 'Backend\BlogController@update')->name('backend.blog.update');
		Route::get('/backend/blog/{blog}', 'Backend\BlogController@show')->name('backend.blog.show');
		Route::delete('/backend/blog/{blog}', 'Backend\BlogController@destroy')->name('backend.blog.destroy');
		Route::get('/backend/blog/{blog}/edit', 'Backend\BlogController@edit')->name('backend.blog.edit');

		/* -------- Categories Routes -----------------*/

		Route::post('/backend/categories', 'Backend\CategoriesController@store')->name('backend.categories.store');
		Route::get('/backend/categories', 'Backend\CategoriesController@index')->name('backend.categories.index');
		Route::get('/backend/categories/create', 'Backend\CategoriesController@create')->name('backend.categories.create');

		Route::patch('/backend/categories/{categories}', 'Backend\CategoriesController@update')->name('backend.categories.update');
		Route::get('/backend/categories/{categories}', 'Backend\CategoriesController@show')->name('backend.categories.show');
		Route::delete('/backend/categories/{categories}', 'Backend\CategoriesController@destroy')->name('backend.categories.destroy');
		Route::get('/backend/categories/{categories}/edit', 'Backend\CategoriesController@edit')->name('backend.categories.edit');


		/* -------- Users Routes -----------------*/
		Route::get('/backend/users/confirm/{users}', [

			'uses' => 'Backend\UsersController@confirm',
			'as' => 'backend.users.confirm'

		]);


		Route::post('backend/users', 'Backend\UsersController@store')->name('backend.users.store');
		Route::get('backend/users', 'Backend\UsersController@index')->name('backend.users.index');
		Route::get('backend/users/create', 'Backend\UsersController@create')->name('backend.users.create');

		Route::patch('backend/users/{users}', 'Backend\UsersController@update')->name('backend.users.update');
		Route::get('backend/users/{users}', 'Backend\UsersController@show')->name('backend.users.show');
		Route::delete('backend/users/{users}', 'Backend\UsersController@destroy')->name('backend.users.destroy');
		Route::get('backend/users/{users}/edit', 'Backend\UsersController@edit')->name('backend.users.edit');


});

Route::redirect('/', '/en');
