<?php


Route::get('/','WelcomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/skill','AdminController@mangeSkill');

Route::post('/skill/new-skill-add','AdminController@addNewSkill');
Route::get('/skill/Remove/{id}','AdminController@Remove');

Route::get('/skill/unpublished/{id}','AdminController@unpublished');
Route::get('/skill/published/{id}','AdminController@published');


Route::get('/portfolio','AdminController@portfolio');
Route::post('/projecttype/new-projectType-add','AdminController@ProjectType');
Route::post('/project/new-project-add','AdminController@Project');

Route::get('/portfolio/Remove/{id}','AdminController@Removeportfolio');

Route::get('/portfolio/unpublished/{id}','AdminController@unpublishedportfolio');
Route::get('/portfolio/published/{id}','AdminController@publishedportfolio');


Route::get('/comment','AdminController@comment');
Route::get('/comment/Remove/{id}','AdminController@RemoveComment');


Route::post('/comment/user-comment','WelcomeController@Usercomment');

Route::get('/comment/Edit/{id}','AdminController@EditComment');

Route::post('/comment/Edit-comment','AdminController@SendMail');