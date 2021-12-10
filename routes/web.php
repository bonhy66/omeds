<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\UserController;

use App\Http\Controllers\Frontend\UserController as FrontendUser;


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
//frontend
// Route::get('/frontend/master',[FrontendUser::class,'frontMaster'])->name('frontend.master');
Route::get('/frontend/index',[FrontendUser::class,'index'])->name('frontend.index');




//backend
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/master',[AdminController::class,'master'])->name('master');
Route::get('/admin/index',[AdminController::class,'index'])->name('admin.index');

Route::get('/admin/category/list',[CategoryController::class,'list'])->name('admin.category.list');
Route::get('/admin/category/create',[CategoryController::class,'form'])->name('admin.category.form');
Route::post('/admin/category/post',[CategoryController::class,'postCategory'])->name('admin.category.post');

Route::get('/admin/product/list',[ProductController::class,'list'])->name('admin.product.list');
Route::get('/admin/product/add',[ProductController::class,'form'])->name('admin.product.add');
Route::post('/admin/product/post',[ProductController::class,'postProduct'])->name('admin.product.post');


Route::get('/admin/company/list',[CompanyController::class,'list'])->name('admin.company.list');
Route::get('/admin/company/entry',[CompanyController::class,'form'])->name('admin.company.entry');
Route::post('/admin/company/post',[CompanyController::class,'PostCompany'])->name('admin.company.post');

Route::get('/admin/employee/list',[EmployeeController::class,'list'])->name('admin.employee.list');
Route::get('/admin/employee/form',[EmployeeController::class,'form'])->name('admin.employee.form');
Route::post('/admin/employee/post',[EmployeeController::class,'postEmployee'])->name('admin.employee.post');

Route::get('/admin/user/list',[UserController::class,'list'])->name('admin.user.list');
