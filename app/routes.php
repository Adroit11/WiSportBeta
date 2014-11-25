<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/',                     ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('/login',                ['as' => 'login', 'uses' => 'UserAuthController@index']);
Route::post('/login',               ['as' => 'login', 'uses' => 'UserAuthController@login']);
//Route::get('/logout',               ['as' => 'logout', 'uses' => 'UserAuthController@logout']);
//Route::controller('/password', 'RemindersController');

Route::get('/password/remind', [ 'as' => 'remind', 'uses' => 'RemindersController@getRemind']);
Route::post('/password/remind', [ 'as' => 'remind', 'uses' => 'RemindersController@postRemind']);
Route::get('/password/reset/{token}', [ 'as' => 'reset', 'uses' => 'RemindersController@getReset']);
Route::post('/password/reset/', [ 'as' => 'reset', 'uses' => 'RemindersController@postReset']);


Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'IndexController@postPayment',
));

// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'IndexController@getPaymentStatus',
));

Route::get('/signup', ['as' => 'signup',  'uses' => 'RegistrationController@create']);
Route::post('/signup', ['as' => 'signup', 'uses' => 'RegistrationController@store']);
Route::post('/renew/{id}', ['as' => 'renew', 'uses' => 'RegistrationController@update']);

/*
 * Blogs
 */
Route::get('/blogs', function()
{
    $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
    //dd($posts);
    return View::make('site.index',['posts'=> $posts]);
});

Route::post('search', 'HomeController@search');

Route::get('blog/{slug}', function($slug){

    $post = Post::where('slug', $slug)->first();

    $date = $post->created_at;
    setlocale(LC_TIME, 'America/Dallas');
    $date = $date->formatlocalized('%A %d %B %Y');

    return View::make('posts.post')->with('post', $post)->with('date', $date);
});


Route::group(array('before' => 'auth'), function(){

    Route::get('admin', 'AdminController@index');
    Route::get('/logout', ['as' => 'logout', 'uses' => 'UserAuthController@logout']);
    Route::resource('posts', "PostController");

});

Route::get('/payNow'    , ['as'=>'paynow', 'uses' => 'PaymentController@getPaymentOptions']);
Route::get('/payCancel' , ['as'=>'cancel', 'uses' => 'PaymentController@cancelPayment']);
Route::get('/payConfirm' , ['as'=>'confirm', 'uses' => 'PaymentController@confirmPayment']);

Route::get('admin/upload', ['as' => 'upload', 'uses' => 'uploadController@getUpload']);
Route::post('admin/upload', ['as' => 'upload', 'uses' => 'ResultsController@getResultsToUpload']);
Route::get('admin/uploadTest', ['as' => 'upload', 'uses' => 'AdminController@getUploadTest']);
Route::get('admin/testUpload', ['as' => 'test', 'uses' => 'AdminController@getTestUpload']);

Route::get('/champions', ['as' => 'champs', 'uses' => 'ChampsController@index']);

Route::get('/champions/{year}', ['as' => 'champs', 'uses' => 'ChampsController@index']);
