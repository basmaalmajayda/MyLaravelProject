<?php


Route::get('/', 'UserController@getHome');

//auth routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lang/{locale}', 'UserController@changeLang');

//user routes
Route::get('/index', 'UserController@getHome');
Route::get('/about', 'UserController@getAbout');
Route::get('/contact', 'UserController@getContact');
Route::get('/service', 'UserController@getService');
Route::get('/blog', 'UserController@getBlog');
Route::post('/searchService', 'UserController@searchService');
Route::get('/blogDetails/{id}', 'UserController@blogDetails');
Route::get('/serviceDetails/{id}', 'UserController@serviceDetails');

//admin routes
Route::group(['middleware' => 'auth'], function () {
Route::get('/logout', 'HomeController@logout');
Route::get('/dashboard', 'DashboardController@getDashboard');
Route::get('/showServices', 'ServiceController@showServices');
Route::post('/storeService', 'ServiceController@storeService');
Route::get('/createService', 'ServiceController@createService');
Route::get('/editService/{id}', 'ServiceController@editService');
Route::post('/updateService', 'ServiceController@updateService');
Route::get('/deleteService/{id}', 'ServiceController@deleteService');
Route::get('/restoreService/{id}', 'ServiceController@restoreService');

Route::get('/showBlogs', 'BlogController@showBlogs');
Route::post('/storeBlog', 'BlogController@storeBlog');
Route::get('/createBlog', 'BlogController@createBlog');
Route::get('/editBlog/{id}', 'BlogController@editBlog');
Route::post('/updateBlog', 'BlogController@updateBlog');
Route::get('/deleteBlog/{id}', 'BlogController@deleteBlog');
Route::get('/restoreBlog/{id}', 'BlogController@restoreBlog');

Route::get('/showTeam', 'TeamController@showTeam');
Route::post('/storeTeam', 'TeamController@storeTeam');
Route::get('/createTeam', 'TeamController@createTeam');
Route::get('/editTeam/{id}', 'TeamController@editTeam');
Route::post('/updateTeam', 'TeamController@updateTeam');
Route::get('/deleteTeam/{id}', 'TeamController@deleteTeam');
Route::get('/restoreTeam/{id}', 'TeamController@restoreTeam');


Route::get('/showFeedback', 'FeedbackController@showFeedback');
Route::post('/storeFeedback', 'FeedbackController@storeFeedback');
Route::get('/createFeedback', 'FeedbackController@createFeedback');
Route::get('/editFeedback/{id}', 'FeedbackController@editFeedback');
Route::post('/updateFeedback', 'FeedbackController@updateFeedback');
Route::get('/deleteFeedback/{id}', 'FeedbackController@deleteFeedback');
Route::get('/restoreFeedback/{id}', 'FeedbackController@restoreFeedback');

Route::get('/showContacts', 'ContactController@showContacts');
Route::post('/storeContact', 'ContactController@storeContact');
Route::get('/deleteContact/{id}', 'ContactController@deleteContact');
Route::get('/restoreContact/{id}', 'ContactController@restoreContact');

Route::get('/showAdmins', 'AdminController@showAdmins');
Route::post('/storeAdmin', 'AdminController@storeAdmin');
Route::get('/createAdmin', 'AdminController@createAdmin');
Route::get('/editAdmin/{id}', 'AdminController@editAdmin');
Route::post('/updateAdmin', 'AdminController@updateAdmin');
Route::get('/deleteAdmin/{id}', 'AdminController@deleteAdmin');
Route::get('/restoreAdmin/{id}', 'AdminController@restoreAdmin');

});