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
Route::get('/chart-flot', [HomeController::class, 'flot'])->name('pages.chart.flot');
Route::get('/chart-chartjs', [HomeController::class, 'chartjs'])->name('pages.chart.chartjs');
Route::get('/chart-inline', [HomeController::class, 'inline'])->name('pages.chart.inline');
Route::get('/chart-uplot', [HomeController::class, 'uplot'])->name('pages.chart.uplot');

// UI
Route::get('/ui-button', [HomeController::class, 'button'])->name('pages.ui.button');
Route::get('/ui-general', [HomeController::class, 'general'])->name('pages.ui.general');
Route::get('/ui-icons', [HomeController::class, 'icons'])->name('pages.ui.icons');
Route::get('/ui-modal', [HomeController::class, 'modal'])->name('pages.ui.modal');
Route::get('/ui-navbar', [HomeController::class, 'navbar'])->name('pages.ui.navbar');
Route::get('/ui-ribbons', [HomeController::class, 'ribbons'])->name('pages.ui.ribbons');
Route::get('/ui-sliders', [HomeController::class, 'sliders'])->name('pages.ui.sliders');
Route::get('/ui-timeline', [HomeController::class, 'timeline'])->name('pages.ui.timeline');

//Form

Route::get('/form-advanced', [HomeController::class, 'formAdvanced'])->name('pages.from.advanced');
Route::get('/form-editors', [HomeController::class, 'formEditors'])->name('pages.from.editors');
Route::get('/form-general', [HomeController::class, 'formGeneral'])->name('pages.from.general');
Route::get('/form-validation', [HomeController::class, 'formValidation'])->name('pages.from.validation');


// Mail Box

Route::get('/mailbox-compose', [HomeController::class, 'mailboxCompose'])->name('pages.mailbox.compose');
Route::get('/mailbox', [HomeController::class, 'mailbox'])->name('pages.mailbox.index');
Route::get('/mailbox-read-mail', [HomeController::class, 'mailboxReadMail'])->name('pages.mailbox.read.mail');
