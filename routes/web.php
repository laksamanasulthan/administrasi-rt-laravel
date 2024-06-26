<?php


use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\House\HouseController;
use App\Http\Controllers\General\ProfileController;
use App\Http\Controllers\Resident\ResidentController;
use App\Http\Controllers\Finance\ExpenditureController;
use App\Http\Controllers\House\HousingStatusController;
use App\Http\Controllers\House\HousingResidentController;
use App\Http\Controllers\Resident\MarriageStatusController;
use App\Http\Controllers\Resident\ResidentStatusController;
use App\Http\Controllers\Finance\ContributionCategoryController;
use App\Http\Controllers\Finance\FinanceSettingsController;
use App\Http\Controllers\Finance\ResidentContributionController;
use App\Http\Controllers\House\HouseSettingController;
use App\Http\Controllers\Resident\ResidentSettingController;

Route::get('/', function () {
    return Inertia::render('Homepage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboardv2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {

    Route::group(['prefix' => 'residents', 'as' => 'residents.'], function () {
        Route::get('/settings', ResidentSettingController::class)->name('settings');
        Route::group(['prefix' => 'resident', 'as' => 'resident.', 'controller' => ResidentController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'marriage-status', 'as' => 'marriage_status.', 'controller' => MarriageStatusController::class], function () {
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'resident-status', 'as' => 'resident_status.', 'controller' => ResidentStatusController::class], function () {
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
    });

    Route::group(['prefix' => 'houses', 'as' => 'houses.'], function () {
        Route::get('/settings', HouseSettingController::class)->name('settings');
        Route::group(['prefix' => 'house', 'as' => 'house.', 'controller' => HouseController::class], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{id}/show', 'show')->name('show');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'housing-status', 'as' => 'housing_status.', 'controller' => HousingStatusController::class], function () {
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
        Route::group(['prefix' => 'housing-resident', 'as' => 'housing_resident.', 'controller' => HousingResidentController::class], function () {
            Route::post('/', 'store')->name('store');
            Route::put('/{id}/update', 'update')->name('update');
            Route::delete('/{id}/delete', 'destroy')->name('delete');
        });
    });

    Route::group(['prefix' => 'finances', 'as' => 'finances.'], function () {
        Route::get('/settings', FinanceSettingsController::class)->name('settings');
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
