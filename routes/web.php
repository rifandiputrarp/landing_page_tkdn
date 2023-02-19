<?php

use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalBasisController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommendJobPostController;
use App\Http\Controllers\VerifyCompanyController;
use App\Http\Middleware\Role;
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

Route::get('/', function () {
    return view('auth.landing');
})->middleware('guest');

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/home', HomeController::class)->middleware(['auth'])->name('home');


Route::get('/companies/verify/{company}', VerifyCompanyController::class)
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('companies.verify');

Route::get('/job-posts/recommend/{job_post}', RecommendJobPostController::class)
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('job-posts.recommend');

Route::get('lacakstatus/{id}', [PengajuanController::class, 'lacakstatus'])->name('requests.lacakstatus');

Route::resources([
    'requests' => PengajuanController::class,
    'companies' => CompanyController::class,
    'data-master' => DataMasterController::class,
    'bookmarks' => BookmarkController::class,
    'dasar-hukum' => LegalBasisController::class,
    'profile' => ProfileController::class,
    'change-password' => ChangePasswordController::class,
]);

require __DIR__ . '/auth.php';
