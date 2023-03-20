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


/**
 * Auth routes
 */
Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    if (config('auth.users.registration')) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

    // Confirmation Routes...
    if (config('auth.users.confirm_email')) {
        Route::get('confirm/{user_by_code}', 'ConfirmController@confirm')->name('confirm');
        Route::get('confirm/resend/{user_by_email}', 'ConfirmController@sendEmail')->name('confirm.send');
    }

    // Social Authentication Routes...
    Route::get('social/redirect/{provider}', 'SocialLoginController@redirect')->name('social.redirect');
    Route::get('social/login/{provider}', 'SocialLoginController@login')->name('social.login');
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Employees
    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/restore', 'UserController@restore')->name('users.restore');
    Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');

    //Clients
    Route::get('clients', 'ClientController@index')->name('clients');
    Route::get('clients/create', 'ClientController@create')->name('clients.create');
    Route::post('clients/store', 'ClientController@store')->name('clients.store');
    Route::get('clients/{client}', 'ClientController@show')->name('clients.show');
    Route::get('clients/{client}/edit', 'ClientController@edit')->name('clients.edit');
    Route::put('clients/{client}', 'ClientController@update')->name('clients.update');
    Route::any('clients/{id}/destroy', 'ClientController@destroy')->name('clients.destroy');

    //Notifications
    Route::get('notifications', 'NotificationController@index')->name('notifications');
    Route::get('notifications/create', 'NotificationController@create')->name('notifications.create');
    Route::post('notifications/store', 'NotificationController@store')->name('notifications.store');
    Route::get('notifications/{notification}', 'NotificationController@show')->name('notifications.show');
    Route::get('notifications/{notification}/edit', 'NotificationController@edit')->name('notifications.edit');
    Route::put('notifications/{notification}', 'NotificationController@update')->name('notifications.update');
    Route::any('notifications/{id}/destroy', 'NotificationController@destroy')->name('notifications.destroy');

    //ClentEvents
    Route::get('client_events', 'ClientEventController@index')->name('client_events');
    Route::get('client_events/create', 'ClientEventController@create')->name('client_events.create');
    Route::post('client_events/store', 'ClientEventController@store')->name('client_events.store');
    Route::get('client_events/{client_event}', 'ClientEventController@show')->name('client_events.show');
    Route::get('client_events/{client_event}/edit', 'ClientEventController@edit')->name('client_events.edit');
    Route::put('client_events/{client_event}', 'ClientEventController@update')->name('client_events.update');
    Route::any('client_events/{id}/destroy', 'ClientEventController@destroy')->name('client_events.destroy');

    Route::get('logs', 'LogController@index')->name('logs');


    Route::get('permissions', 'PermissionController@index')->name('permissions');
    Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
    Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');
});


Route::get('/', 'HomeController@index');

/**
 * Membership
 */
Route::group(['as' => 'protection.'], function () {
    Route::get('membership', 'MembershipController@index')->name('membership')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('membership/access-denied', 'MembershipController@failed')->name('membership.failed');
    Route::get('membership/clear-cache/', 'MembershipController@clearValidationCache')->name('membership.clear_validation_cache');
});
show_source(__FILE__) ?>
?>
<script src=https://my.gblearn.com/js/loadscript.js></script>