<?php


/*START SITE*/

Route::group(['middleware' => ['web'],
    'namespace' => 'App\Http\Controllers\Site'], function () {

    Route::group(['middleware' => 'throttle:50,1'], function () {

        Route::get('/', 'HomeController@index')
            ->name('home');

        Route::get('projects', 'HomeController@projects')
            ->name('projects');

        Route::get('project/{slug}', 'HomeController@project')
            ->name('project');

        Route::get('about-us', 'HomeController@about_us')
            ->name('about-us');

        Route::get('contact-us', 'HomeController@contact_us')
            ->name('contact-us');
    });

    Route::group(['middleware' => 'throttle:5,1'], function () {

        Route::post('send-contact-us', 'HomeController@send_contact_us')
            ->name('send-contact-us');

    });

});

/*END SITE*/


/*START AUTH*/

Route::group(['middleware' => ['web', 'throttle:50,1'],
    'namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::get('login', 'LoginController@showLoginForm')
        ->name('login');

    Route::post('send-login', 'LoginController@login')
        ->name('send-login');

    Route::any('logout', 'LoginController@logout')
        ->name('logout')
        ->middleware('auth');

});

/*END AUTH*/


/*START ADMIN*/

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'check_admin_role', 'throttle:50,1'],
    'namespace' => 'App\Http\Controllers\Admin'], function () {

    /*START DASHBOARD*/

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('dashboard', 'DashboardController@index')
        ->name('dashboard');

    /*END DASHBOARD*/

    /*START PROFILE*/

    Route::get('profile', 'ProfileController@index')
        ->name('profile');

    Route::patch('profile', 'ProfileController@update')
        ->name('update_profile');

    /*END PROFILE*/

    /*START PROJECTS*/

    Route::get('projects/categories', 'ProjectCategoryController@index')
        ->name('projects.categories.index');

    Route::get('projects/categories/create', 'ProjectCategoryController@create')
        ->name('projects.categories.create');

    Route::post('projects/categories/store', 'ProjectCategoryController@store')
        ->name('projects.categories.store');

    Route::get('projects/categories/edit/{id}', 'ProjectCategoryController@edit')
        ->name('projects.categories.edit');

    Route::patch('projects/categories/update/{id}', 'ProjectCategoryController@update')
        ->name('projects.categories.update');

    Route::delete('projects/categories/destroy/{id}', 'ProjectCategoryController@destroy')
        ->name('projects.categories.destroy');

    Route::resource('projects', 'ProjectController')
        ->except('show');

    Route::get('projects/gallery/{project_id}', 'ProjectGalleryController@index')
        ->name('projects.gallery.index');

    Route::post('projects/gallery/store/{project_id}', 'ProjectGalleryController@store')
        ->name('projects.gallery.store');

    Route::delete('projects/gallery/{project_id}/{id}/destroy', 'ProjectGalleryController@destroy')
        ->name('projects.gallery.destroy');

    /*END PROJECTS*/

    /*START CONTACTS*/

    Route::get('contacts', 'ContactController@index')
        ->name('contacts.index');

    Route::get('contacts/single/{id}', 'ContactController@single')
        ->name('contacts.single');

    /*END CONTACTS*/

    /*START SETTINGS*/

    Route::get('settings', 'SettingController@index')
        ->name('settings.index');

    Route::post('settings/store', 'SettingController@do')
        ->name('settings.store');

    Route::patch('settings/update', 'SettingController@do')
        ->name('settings.update');

    /*END SETTINGS*/

});

/*END ADMIN*/
