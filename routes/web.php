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

Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>['auth','admin'||'subAdmin']],function(){

    Route::get('/home',[
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
      /* ---------Users------------ */
      Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    
     Route::get('/user/create',[
         'uses' => 'UsersController@create',
         'as' => 'user.create'
     ]);
    
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    // Route::get('/user/edit/{id}',[
    //     'uses' => 'UsersController@edit',
    //     'as' => 'user.edit'
    // ]);
    Route::get('/user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    // Route::post('/user/update/{id}',[
    //     'uses' => 'UsersController@update',
    //     'as' => 'user.update'
    // ]);
    Route::get('/user/changerole/{id}',[
        'uses' => 'UsersController@changerole',
        'as' => 'user.changerole'
    ]);
    
     /* ---------Questions------------ */
     Route::get('/questions',[
        'uses' => 'QuestionsController@index',
        'as' => 'questions'
    ]);
    
    Route::get('/question/create',[
        'uses' => 'QuestionsController@create',
        'as' => 'question.create'
    ]);
    
    Route::post('/question/store',[
        'uses' => 'QuestionsController@store',
        'as' => 'question.store'
    ]);    
    Route::post('/question/storeanswer/{id}',[
        'uses' => 'QuestionsController@answerstore',
        'as' => 'question.answerstore'
    ]);
    Route::get('/question/edit/{id}',[
        'uses' => 'QuestionsController@edit',
        'as' => 'question.edit'
    ]);
    Route::get('/question/delete/{id}',[
        'uses' => 'QuestionsController@destroy',
        'as' => 'question.delete'
    ]);
    Route::post('/question/update/{id}',[
        'uses' => 'QuestionsController@update',
        'as' => 'question.update'
    ]);
    
    /* ---------Categories------------ */
     /* ---------Subject-Categories------------ */
    Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);
    Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);
    Route::post('/category/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    
    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);
    //  /* ---------Subject-Model-Categories------------ */
    //  Route::get('/categories',[
    //     'uses' => 'CategoriesController@index',
    //     'as' => 'categories'
    // ]);
    // Route::get('/category/create',[
    //     'uses' => 'CategoriesController@create',
    //     'as' => 'category.create'
    // ]);
    // Route::post('/category/store',[
    //     'uses' => 'CategoriesController@store',
    //     'as' => 'category.store'
    // ]);
    
    // Route::get('/category/edit/{id}',[
    //     'uses' => 'CategoriesController@edit',
    //     'as' => 'category.edit'
    // ]);
    // Route::get('/category/delete/{id}',[
    //     'uses' => 'CategoriesController@destroy',
    //     'as' => 'category.delete'
    // ]);
    // Route::post('/category/update/{id}',[
    //     'uses' => 'CategoriesController@update',
    //     'as' => 'category.update'
    // ]);
    //  /* ---------Subject-Model-Categories------------ */
    //  Route::get('/categories',[
    //     'uses' => 'CategoriesController@index',
    //     'as' => 'categories'
    // ]);
    // Route::get('/category/create',[
    //     'uses' => 'CategoriesController@create',
    //     'as' => 'category.create'
    // ]);
    // Route::post('/category/store',[
    //     'uses' => 'CategoriesController@store',
    //     'as' => 'category.store'
    // ]);
    
    // Route::get('/category/edit/{id}',[
    //     'uses' => 'CategoriesController@edit',
    //     'as' => 'category.edit'
    // ]);
    // Route::get('/category/delete/{id}',[
    //     'uses' => 'CategoriesController@destroy',
    //     'as' => 'category.delete'
    // ]);
    // Route::post('/category/update/{id}',[
    //     'uses' => 'CategoriesController@update',
    //     'as' => 'category.update'
    // ]);
     /* ---------Tags------------ */
     Route::get('/tags',[
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::post('/tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);
    Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
     /* ---------Exams------------ */
     Route::get('/examsurveys',[
        'uses' => 'ExamSurveysController@index',
        'as' => 'examsurvey.index'
    ]);
    Route::get('/examsurvey/create',[
        'uses' => 'ExamSurveysController@create',
        'as' => 'examsurvey.create'
    ]);
    Route::post('/examsurvey/store',[
        'uses' => 'ExamSurveysController@store',
        'as' => 'examsurvey.store'
    ]);
});
 /* ---------SubscriberRoute------------ */

Route::group(['prefix'=>'dashboard','middleware'=>['auth','subscriber']],function(){
    Route::get('/subscriber',[
        'uses' => 'SubscribersController@index',
        'as' => 'subscriber'
    ]);
      /* ---------Users------------ */
     
});