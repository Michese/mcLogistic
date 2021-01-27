<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\main\AboutController;
use App\Http\Controllers\main\CalculationCostController;
use App\Http\Controllers\main\ContactsController;
use App\Http\Controllers\main\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\main\OrderController;
use App\Http\Controllers\main\PartnersController;
use App\Http\Controllers\profile\AdminController;
use App\Http\Controllers\profile\ClientController;
use App\Http\Controllers\profile\CourierController;
use App\Http\Controllers\profile\ManagerController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/index', [HomeController::class, 'index'])
    ->name('index');

Route::get('/about', [AboutController::class, 'about'])
    ->name('about');

Route::get('/contacts', [ContactsController::class, 'contacts'])
    ->name('contacts');

Route::get('/feedback', [FeedbackController::class, 'feedback'])
    ->name('feedback');

Route::post('/feedback', [FeedbackController::class, 'create'])
    ->name('feedback');

Route::get('/order', [OrderController::class, 'order'])
    ->name('order');

Route::post('/order/create', [OrderController::class, 'create'])
    ->name('order.create');

Route::get('/calculationСost', [CalculationCostController::class, 'calculationСost'])
    ->name('calculation.cost');

Route::get('/partners', [PartnersController::class, 'partners'])
    ->name('partners');


Route::group([
    'prefix' => '/auth',
    'as' => 'auth.',
], function () {
    // Login Routes...
    if ($options['login'] ?? true) {
        Route::get('login', [LoginController::class, 'showLoginForm'])
            ->name('login');

        Route::post('login', [LoginController::class, 'login'])
            ->name('login');
    }

    // Logout Routes...
    if ($options['logout'] ?? true) {
        Route::post('logout', [LoginController::class, 'logout'])
            ->name('logout');
    }

    // Registration Routes...
    if ($options['register'] ?? true) {
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])
            ->name('register');

        Route::post('register', [RegisterController::class, 'register'])
            ->name('register');
    }

    // Password Reset Routes...
    if ($options['reset'] ?? true) {
        Route::resetPassword();
    }

    // Email Verification Routes...
    if ($options['verify'] ?? false) {
        Route::emailVerification();
    }

    Route::group([
        'prefix' => '/socialite',
        'as' => 'socialite.',
    ], function () {
        Route::get('/vk', [SocialiteController::class, 'redirectVK'])
            ->name('vk');

        Route::get('/response/vk', [SocialiteController::class, 'responseVK'])
            ->name('response.vk');
    });
});

Route::group([
    'prefix' => '/profile',
    'as' => 'profile.',
], function () {
    Route::group([
        'prefix' => '/manager',
        'as' => 'manager.',
    ], function () {
        Route::get('/order', [ManagerController::class, 'order'])
            ->name('order');

        Route::post('/order/send', [ManagerController::class, 'sendToCouriers'])
            ->name('order.send');

        Route::get('/monitoring', [ManagerController::class, 'monitoring'])
            ->name('monitoring');

        Route::post('/monitoring/change', [ManagerController::class, 'change'])
            ->name('monitoring.change');

        Route::post('/monitoring/cancel', [ManagerController::class, 'cancel'])
            ->name('monitoring.cancel');
    });

    Route::get('/', [ProfileController::class, 'profile'])
        ->name('index');

    Route::post('/edit', [ProfileController::class, 'edit'])
        ->name('edit');

    Route::group([
        'prefix' => '/courier',
        'as' => 'courier.',
    ], function () {
        Route::get('/order', [CourierController::class, 'order'])
            ->name('order');

        Route::post('/order/add', [CourierController::class, 'add'])
            ->name('order.add');

        Route::post('/order/change', [CourierController::class, 'changeStatusOrder'])
            ->name('order.change');
    });

    Route::get('/client/order', [ClientController::class, 'order'])
        ->name('client.order');

    Route::group([
        'prefix' => '/admin',
        'as' => 'admin.',
    ], function () {
        Route::get('/users', [AdminController::class, 'users'])
            ->name('users');

        Route::post('/users/edit', [AdminController::class, 'edit'])
            ->name('users.edit');

        Route::post('/users/delete', [AdminController::class, 'delete'])
            ->name('users.delete');
    });

});
