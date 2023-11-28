<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TenanController;
use App\Http\Controllers\Backend\KasirController;
use App\Http\Controllers\Backend\BarangController;



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

Route::get('/',[HomeController::class, 'index']);

Route::get('/index2', [Index2Controller::class, 'index2']);

// Route::get('about',[HomeController::class, 'about']);

Route::get('components',[HomeController::class, 'components']);

Route::get('download-pdf', [PdfController::class, 'index']);



//Admin

Route::group(['middleware' => 'admin'], function () {

    Route::get('admin/dashboard',[DashboardController::class, 'dashboard']);

    // Home
    Route::get('admin/home',[DashboardController::class, 'admin_home']);

    Route::post('admin/home/post',[DashboardController::class, 'admin_home_post']);

    Route::get('admin/home/delete/{id}',[DashboardController::class, 'admin_home_delete']);

    Route::post('admin/home/delete/{id}',[DashboardController::class, 'admin_home_delete_post']);

    
    // Tenan
    Route::get('admin/tenan',[TenanController::class, 'admin_tenan']);

    Route::get('admin/tenan/add',[TenanController::class, 'tenan_add']);

    Route::post('admin/tenan/add',[TenanController::class, 'tenan_add_post']);

    Route::get('admin/tenan/edit/{id}',[TenanController::class, 'admin_tenan_edit']);
    
    Route::post('admin/tenan/edit/{id}',[TenanController::class, 'admin_tenan_edit_post']);

    Route::get('admin/tenan/delete/{id}',[TenanController::class, 'admin_tenan_delete']);
   
    Route::post('admin/tenan/delete/{id}',[TenanController::class, 'admin_tenan_delete_post']);

    // Barang
    Route::get('admin/barang',[BarangController::class, 'admin_barang']);

    Route::get('admin/barang/add',[BarangController::class, 'barang_add']);

    Route::post('admin/barang/add',[BarangController::class, 'barang_add_post']);

    Route::get('admin/barang/edit/{id}',[BarangController::class, 'admin_barang_edit']);
    
    Route::post('admin/barang/edit/{id}',[BarangController::class, 'admin_barang_edit_post']);
    
    Route::get('admin/barang/delete/{id}',[BarangController::class, 'admin_barang_delete']);
    
    Route::post('admin/barang/delete/{id}',[BarangController::class, 'admin_barang_delete_post']);

    // Kasir
    Route::get('admin/kasir',[KasirController::class, 'admin_kasir']);

    Route::get('admin/kasir/add',[KasirController::class, 'kasir_add']);

    Route::post('admin/kasir/add',[KasirController::class, 'kasir_add_post']);

    Route::get('admin/kasir/edit/{id}',[KasirController::class, 'admin_kasir_edit']);
    
    Route::post('admin/kasir/edit/{id}',[KasirController::class, 'admin_kasir_edit_post']);

    Route::get('admin/kasir/delete/{id}',[KasirController::class, 'admin_kasir_delete']);
    
    Route::post('admin/kasir/delete/{id}',[KasirController::class, 'admin_kasir_delete_post']);


});

Route::get('login',[AuthController::class, 'login']);

Route::post('login_admin',[AuthController::class, 'login_admin']);

Route::get('forgot',[AuthController::class, 'forgot']);

Route::post('forgot_admin',[AuthController::class, 'forgot_admin']);

Route::get('logout',[AuthController::class, 'logout']);