<?php

use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
 */
 
 
 
 Route::get('/mm', function () {
    trim_characters();
  //  return view('welcome');
});



Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});




Route::get('/dd', function () {
});

Auth::routes();
Route::get('lang/{locale}', function ($locale) {

    App::setLocale($locale);
    //store the locale in session so that the middleware can register it
    session()->put('locale', $locale);
    $a = session()->get('locale');
    return Redirect::back();
})->name('lang');
Route::namespace ('front')->group(function () {
    Route::get('/', 'Main@index')->name('index');
    Route::get('/about', 'Main@about')->name('about');
    Route::get('/services', 'Main@services')->name('services');
    Route::get('/portfolio', 'Main@portfolio')->name('portfolio');
    Route::get('/blog', 'Main@blog')->name('blog');
    Route::get('/contact', 'Main@contact')->name('contact');
    Route::post('/Contact_send/', 'Main@Contact_send')->name('Contact_send');
    Route::get('/blog/{id}', 'Main@signel_blog')->name('blog.singel');
    Route::post('/blog/serch', 'Main@blog_serch')->name('blog.serch');
});
Route::namespace ('Back')->prefix('admin')->group(function () {
    Route::get('/login', 'indexController@login')->name('login');
    Route::get('/index', 'indexController@showindex')->name('index.show');
    Route::match(['get', 'post'], '/login/user', 'indexController@login_user')->name('login.user');
    Route::match(['get', 'post'], '/logout', 'usersController@logout')->name('logout');
    Route::match(['get', 'post'], '/destroy/blog/{id}/{img}', 'blogController@destroy')->name('blog.destroy.dell');
    Route::match(['get', 'post'], '/destroy/contact/{id}', 'contactController@destroy')->name('contact.destroy.dell');
    Route::match(['get', 'post'], '/destroy/we/{id}/{img}', 'weController@destroy')->name('we.destroy.dell');
    Route::match(['get', 'post'], '/destroy/works/{id}/{img}', 'worksController@destroy')->name('works.destroy.dell');
    Route::match(['get', 'post'], '/destroy/skills/{id}', 'skillsController@destroy')->name('skills.destroy.dell');
    Route::match(['get', 'post'], '/destroy/slide/{id}/{img}', 'slideController@destroy')->name('slide.destroy.dell');
    Route::match(['get', 'post'], '/destroy/section_work/{id}', 'section_workController@destroy')->name('section_work.destroy.dell');
    Route::match(['get', 'post'], '/destroy/customers/{id}/{img}', 'customersController@destroy')->name('customers.destroy.dell');
    Route::match(['get', 'post'], '/destroy/services/{id}/{img}', 'servicesController@destroy')->name('services.destroy.dell');
    Route::match(['get', 'post'], '/destroy/opinions/{id}/{img}', 'opinionsController@destroy')->name('opinions.destroy.dell');
    Route::match(['get', 'post'], '/destroy/recent/{id}/{img}', 'recentController@destroy')->name('recent.destroy.dell');
    Route::match(['get', 'post'], '/destroy/instagram/{id}/{img}', 'instagramController@destroy')->name('instagram.destroy.dell');
    Route::match(['get', 'post'], '/destroy/blog_sections/{id}', 'blog_sectionsController@destroy')->name('blog_sections.destroy.dell');
    Route::resource('blog_sections', 'blog_sectionsController');
    Route::resource('instagram', 'instagramController');
    Route::resource('blog', 'blogController');
    Route::resource('contact', 'contactController');
    Route::resource('we', 'weController');
    Route::resource('works', 'worksController');
    Route::resource('skills', 'skillsController');
    Route::resource('slide', 'slideController');
    Route::resource('section_work', 'section_workController');
    Route::resource('customers', 'customersController');
    Route::resource('recent', 'recentController');
    Route::resource('services', 'servicesController');
    Route::resource('opinions', 'opinionsController');
    Route::resource('main_services', 'opinionsController');
    #=================================================================================
    Route::get('/com1/{lang}', 'componentController@show_com1')->name('show_com1');
    Route::get('/com2/{lang}', 'componentController@show_com2')->name('show_com2');
    Route::get('/com3/{lang}', 'componentController@show_com3')->name('show_com3');
    Route::get('/com4/{lang}', 'componentController@show_com4')->name('show_com4');
    Route::get('/com5/{lang}', 'componentController@show_com5')->name('show_com5');
    Route::get('/com6/{lang}', 'componentController@show_com6')->name('show_com6');
    Route::post('/consultation/send', 'Main@consultation')->name('consultation.send');
    Route::match(['get', 'post'], '/component/{id}/{pag}', 'componentController@component')->name('component.up');
    //==================================================================================
    Route::match(['get', 'post'], '/destroy/notifications/{id}/{img}', 'notificationsController@destroy')->name('notifications.destroy.dell');
    Route::resource('notifications', 'notificationsController');
    Route::match(['get', 'post'], '/destroy/latest_additions/{id}/{img}', 'latest_additionsController@destroy')->name('latest_additions.destroy.dell');
    Route::resource('latest_additions', 'latest_additionsController');
    Route::match(['get', 'post'], '/logout', 'usersController@logout')->name('logout');
    Route::match(['get', 'post'], '/destroy/users/{id}/{img}', 'usersController@destroy')->name('users.destroy.dell');
    Route::resource('users', 'usersController');

});
