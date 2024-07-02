<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LessonPurchaseController;
use App\Http\Controllers\ProductPurchaseController;
use App\Http\Controllers\SalesReportController;

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

Route::get('/', function () {
    return view('landing.landing');
});

// Landing
Route::get('/home',[BerandaController::class, 'home'])->name('home');

// Login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');



// Dashboard User
Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');
// Route::get('/beranda/total', [BerandaController::class, 'total'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Les
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('lessons', LessonController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('materials', MaterialController::class);
    Route::resource('attendances', AttendanceController::class);
    Route::resource('feedbacks', FeedbackController::class);
    Route::resource('schedules', ScheduleController::class);
});

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','admin']);






Route::middleware(['auth','admin'])->group(function () {
    // Product management routes
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
    // Laporan Penjualan
    Route::get('/sales-report', [SalesReportController::class,'index'])->name('sales.report');

   
});

Route::middleware(['auth'])->group(function(){
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/{id}', [ProductPurchaseController::class, 'show'])->name('products.show');

     // Product purchase routes
    Route::post('products/{id}/purchase', [ProductPurchaseController::class, 'purchase'])->name('products.purchase');
    Route::get('admin/product-purchases', [ProductPurchaseController::class, 'adminIndex'])->name('admin.product_purchases.index');
    

});