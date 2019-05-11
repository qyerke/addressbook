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

Route::get('/', 'IndexController@index')->name('index');
Route::any ( '/search', function () {
    $q = \Illuminate\Support\Facades\Input::get ( 'q' );
    if($q != ""){
        $contacts = \App\Contact::where('first_name', 'LIKE', '%' . $q . '%')->orWhere('last_name', 'LIKE', '%' . $q . '%' )->orWhere('phone', 'LIKE', '%' . $q . '%' )->paginate(5)->setPath('');
        $pagination = $contacts->appends( array (
            'q' => \Illuminate\Support\Facades\Input::get ( 'q' )
        ) );
        if (count ( $contacts ) > 0)
            return view('welcome')->withDetails($contacts)->withQuery($q);
    }
    return view('welcome')->withMessage("Извините, запроc по $q не найдено");
} );
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::group(['prefix'=>'home', 'middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index');
    Route::resource('/contacts', 'Admin\ContactsController');
    Route::resource('/users', 'Admin\UsersController');
});
