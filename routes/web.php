<?php

Route::get('/', 'Site\FrontController@index')->name('site.front');
Route::get('solicitudes-hospedaje/{commercialPackage}','Site\ApplicationsController@create')->name('site.applications.create');
Route::post('solicitudes-hospedaje','Site\ApplicationsController@store')->name('site.applications.store');


Route::get('listar-solicitudes','Site\ApplicationsController@showAll')->name('site.solicitud.list');
Route::get('pagina-nueva','Site\ApplicationsController@showPage')->name('site.page._main_page');


Route::group(['middleware' => ['access']], function () {
    // Authentication Routes...
    Route::get(Lang::get('routes.login'), 'Auth\LoginController@showLoginForm')->where('login', Lang::get('routes.login'))->name('login');
    Route::post(Lang::get('routes.login'), 'Auth\LoginController@login')->where('login', Lang::get('routes.login'));

    Route::post('/logout','Auth\LoginController@logoutok');


    Route::post('{logout}', 'Auth\LoginController@logout')->name('logout')->where('logout', Lang::get('routes.logout'));

    // Registration Routes...
    Route::get('{register}', 'Auth\RegisterController@showRegistrationForm')->name('register')->where('register',
        Lang::get('routes.register'));
    Route::post('{register}', 'Auth\RegisterController@register')->where('register', Lang::get('routes.register'));

    // Password Reset Routes...
    Route::get('{password}/{reset}', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request')
        ->where('password', Lang::get('routes.password'))->where('reset', Lang::get('routes.reset'));
    Route::post('{password}/{email}', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email')
        ->where('password', Lang::get('routes.password'))->where('email', Lang::get('routes.email'))
        ->defaults('password', Lang::get('routes.password'))->defaults('email', Lang::get('routes.email'));
    Route::get('{password}/{reset}/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset')
        ->defaults('password', Lang::get('routes.password'))->defaults('reset', Lang::get('routes.reset'))
        ->where('password', Lang::get('routes.password'))->where('reset', Lang::get('routes.reset'));
    Route::post('{password}/{reset}', 'Auth\ResetPasswordController@reset')->name('password.update')
        ->where('password', Lang::get('routes.password'))->where('reset', Lang::get('routes.reset'))
        ->defaults('password', Lang::get('routes.password'))->defaults('reset', Lang::get('routes.reset'));

    //Verification Routes....
    Route::get('correo/verificar', 'Auth\VerificationController@show')->name('verification.notice');
    //Route::get('{email}/{verify}', 'Auth\VerificationController@show')->name('verification.notice')
    //    ->where('email', Lang::get('routes.email'))->where('verify', Lang::get('routes.verify'));
    Route::get('{email}/{verify}/{id}', 'Auth\VerificationController@verify')->name('verification.verify')
        ->where('email', Lang::get('routes.email'))->where('verify', Lang::get('routes.verify'));;
    Route::get('{email}/{resend}', 'Auth\VerificationController@resend')->name('verification.resend')->where('email',
        Lang::get('routes.email'))->where('resend', Lang::get('routes.resend'));
});

Route::group(['middleware' => ['verified', 'entrust', 'access']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
        Route::resource('commercial-packages', \Admin\CommercialPackageController::class);
        Route::resource('data-base-types', \Admin\DataBaseTypeController::class);
        Route::resource('operating-systems', \Admin\OperatingSystemController::class);
        Route::resource('programming-languages', \Admin\TechnologyController::class);
        Route::resource('site-types', \Admin\SiteTypeController::class);
        Route::resource('sections', \Admin\SectionController::class);
        Route::resource('page-creator', \Admin\PageController::class);
    });
});






