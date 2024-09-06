<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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





Route::get('/demo', [ MyController::class, 'demoFunction']);
Route::get('/Home', [MyController::class, 'Home'])->name('Home');

// Route for the About page
Route::get('/EHR', [MyController::class, 'EHR'])->name('EHR');

// Route for the Blog page
Route::get('/Patient', [MyController::class, 'Patient'])->name('Patient');

// Route for the Contact Us page
Route::get('/Schedule', [MyController::class, 'Schedule'])->name('Schedule');
Route::get('/Billing', [MyController::class, 'Billing'])->name('Billing');

// Route for the About page
Route::get('/Realtime', [MyController::class, 'Realtime'])->name('Realtime');

// Route for the Blog page
Route::get('/Report', [MyController::class, 'Report'])->name('Report');

// Route for the Contact Us page
Route::get('/TaskandMessages', [MyController::class, 'TaskandMessages'])->name('TaskandMessages');
Route::get('/Admin', [MyController::class, 'Admin'])->name('Admin');

Route::get('/Knowledge Base', [MyController::class, 'KnowledgeBase'])->name('KnowledgeBase');
Route::get('/Live Webinars', [MyController::class, 'LiveWebinars'])->name('LiveWebinars');
Route::get('/eLearning', [MyController::class, 'eLearning'])->name('eLearning');
Route::get('/Help', [MyController::class, 'Help'])->name('Help');
Route::get('/ClientSupport', [MyController::class, 'ClientSupport'])->name('ClientSupport');
Route::get('/DisclaimerPrivacyStatement', [MyController::class, 'DisclaimerPrivacyStatement'])->name('DisclaimerPrivacyStatement');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/login', function () {
    return view('auth.login'); // Points to your customized login blade view
})->name('login');

// Redirect to home after login
Route::get('/Home', function () {
    return view('Home'); // Points to your home view
})->middleware('auth')->name('Home');
