<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Middleware\Role;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//Admin_Route
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/edit-profile', [AdminController::class, 'EditProfile'])->name('admin.edit.profile');



}); //End_Group Middleware

Route::middleware(['auth','role:admin'])->group(function(){

    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
        Route::get('/edit-profile', [AdminController::class, 'EditProfile'])->name('admin.edit.profile');

    });
//StudentClass
Route::prefix('setup')->group(function(){
    Route::get('/student/class/view', [StudentClassController::class, 'view'])->name('student.class.view');
    Route::get('/student/class/add', [StudentClassController::class, 'add'])->name('student.class.add');
    Route::get('/student/class/store', [StudentClassController::class, 'store'])->name('student.class.store');
    Route::get('/student/class/edit', [StudentClassController::class, 'edit'])->name('student.class.edit');
    Route::get('/student/class/update', [StudentClassController::class, 'update'])->name('student.class.update');
    Route::get('/student/class/delete', [StudentClassController::class, 'delete'])->name('student.class.delete');

});
    



}); //End_Group Middleware

Route::middleware(['auth','role:superadmin'])->group(function(){

    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'SuperAdminDashboard'])->name('super_admin.dashboard');

}); //End_Group Middleware

//Admin Login
 Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

