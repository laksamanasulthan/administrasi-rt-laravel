<?php

use App\Http\Controllers\ContributionCategoryController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\HousingResidentController;
use App\Http\Controllers\HousingStatusController;
use App\Http\Controllers\MarriageStatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentContributionController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ResidentStatusController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {

    Route::group(['prefix' => 'residents', 'as' => 'residents.'], function () {
        Route::group(['prefix' => 'resident', 'as' => 'resident.', 'controller' => ResidentController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'marriage-status', 'as' => 'marriage_status.', 'controller' => MarriageStatusController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'resident-status', 'as' => 'resident_status.', 'controller' => ResidentStatusController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
    });

    Route::group(['prefix' => 'houses', 'as' => 'houses.'], function () {
        Route::group(['prefix' => 'house', 'as' => 'house.', 'controller' => HouseController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'housing-status', 'as' => 'housing_status.', 'controller' => HousingStatusController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'housing-resident', 'as' => 'housing_resident.', 'controller' => HousingResidentController::class], function () {
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/{id}/show-by-house-id', 'showByHouseId')->name('show_by_house_id');
            Route::put('/{id}/update', 'updateStatus')->name('updateStatus');
        });
    });

    Route::group(['prefix' => 'finances', 'as' => 'finances.'], function () {
        Route::group(['prefix' => 'resident-contribution', 'as' => 'resident_contribution.', 'controller' => ResidentContributionController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'contribution-category', 'as' => 'contribution_category.', 'controller' => ContributionCategoryController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'expenditure', 'as' => 'expenditure.', 'controller' => ExpenditureController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
    });
});


require __DIR__ . '/auth.php';
