<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
// Chart
Route::get('/flot', [HomeController::class, 'flot'])->name('pages.chart.flot');
Route::get('/chartjs', [HomeController::class, 'chartjs'])->name('pages.chart.chartjs');
Route::get('/inline', [HomeController::class, 'inline'])->name('pages.chart.inline');
Route::get('/u-plot', [HomeController::class, 'uplot'])->name('pages.chart.uplot');

// UI
Route::get('/ui-button', [HomeController::class, 'button'])->name('pages.ui.button');
Route::get('/ui-general', [HomeController::class, 'general'])->name('pages.ui.general');
Route::get('/ui-icons', [HomeController::class, 'icons'])->name('pages.ui.icons');
Route::get('/ui-modal', [HomeController::class, 'modal'])->name('pages.ui.modal');
Route::get('/ui-navbar', [HomeController::class, 'navbar'])->name('pages.ui.navbar');
Route::get('/ui-ribbons', [HomeController::class, 'ribbons'])->name('pages.ui.ribbons');
Route::get('/ui-sliders', [HomeController::class, 'sliders'])->name('pages.ui.sliders');
Route::get('/ui-timeline', [HomeController::class, 'timeline'])->name('pages.ui.timeline');
