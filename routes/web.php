<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventExportController;
use App\Http\Controllers\Admin\EventStatusMessageController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberStatusMessageController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\RegisterStatusMessageController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\SpeakerStatusMessageController;
use App\Http\Controllers\Admin\SponserController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Admin\VolunteerStatusMessageController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SponserStatusMessageController;
use App\Http\Controllers\StoreFormInformationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();



Route::get('/blog',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}',[PostController::class,'show']);
Route::post('/posts/{post:slug}/comments',[PostCommentsController::class,'store']);

Route::post('/storeEmail', [StoreFormInformationController::class, 'storeEmail'])->name('storeEmail');


Route::get('/', [MainHomeController::class, 'main'])->name('main');
Route::get('/aboutTed', [MainHomeController::class, 'aboutTed'])->name('aboutTed');
Route::get('/members', [MainHomeController::class, 'members'])->name('members');


Route::get('/register', [MainHomeController::class, 'register'])->name('register');
Route::get('/partner', [MainHomeController::class, 'partner'])->name('partner');
Route::get('/volunteer', [MainHomeController::class, 'volunteer'])->name('volunteer');

Route::get('/register_form', [MainHomeController::class, 'register_form'])->name('register_form');
Route::get('/partner_form', [MainHomeController::class, 'partner_form'])->name('partner_form');
Route::get('/volunteer_form', [MainHomeController::class, 'volunteer_form'])->name('volunteer_form');


// Route::get('/other', [MainHomeController::class, 'other'])->name('other');

Route::get('/faq', [MainHomeController::class, 'faq'])->name('faq');
Route::get('/sponsers', [MainHomeController::class, 'sponsers'])->name('sponsers');
Route::get('/about', [MainHomeController::class, 'about'])->name('about');

Route::post('/storeRegister', [StoreFormInformationController::class, 'storeRegister'])->name('storeRegister');
Route::post('/storePartner', [StoreFormInformationController::class, 'storePartner'])->name('storePartner');
Route::post('/storeVolunteer', [StoreFormInformationController::class, 'storeVolunteer'])->name('storeVolunteer');
Route::post('/storeOther', [StoreFormInformationController::class, 'storeOther'])->name('storeOther');





