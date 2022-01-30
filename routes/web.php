<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\OrderdetailsController;
use App\Http\Controllers\backend\RequisitionController;
// use App\Http\Controllers\Admin\UserController as AdminUserController;

use App\Http\Controllers\Frontend\UserController as FrontendUser;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\OrderController as Order;


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

//Route::get('/',[FrontendUser::class,'frontend'])->name('master');


//Route::get('/',function(){
//  return view('frontend.index');
//});


//frontend
// Route::get('/frontend/master',[FrontendUser::class,'frontMaster'])->name('frontend.master');

Route::group(['prefix'=>'frontend'],function(){

Route::get('/index',[FrontendUser::class,'index'])->name('frontend.index');

Route::get('/login',[FrontendUser::class,'userlogin'])->name('user.login');
Route::post('/login/post',[FrontendUser::class,'dologin'])->name('user.dologin');
Route::get('/logout',[FrontendUser::class,'userlogout'])->name('user.logout');

Route::get('/registration',[FrontendUser::class,'registration'])->name('user.registration');
Route::post('/registration',[FrontendUser::class,'doregistration'])->name('user.doRegistration');

Route::get('/view/{id}',[FrontendController::class,'viewSingleProduct'])->name('user.singleProduct.view');

Route::get('/checkout',[Order::class,'checkout'])->name('user.checkout');
Route::post('/checkout-process',[Order::class,'orderPlace'])->name('order.place');

Route::get('/add_to_cart/{id}',[CartController::class,'addtocart'])->name('addtocart');
Route::get('/cartview',[CartController::class,'viewcart'])->name('viewcart');






});

//backend

//admin login



Route::get('/',[UserController::class,'login'])->name('admin.login');
Route::post('/login',[UserController::class,'doLogin'])->name('admin.doLogin');


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout',[UserController::class,'Adminlogout'])->name('admin.logout');

Route::get('/master',[AdminController::class,'master'])->name('master');
Route::get('admin/index',[AdminController::class,'index'])->name('admin.index');

Route::get('/category/list',[CategoryController::class,'list'])->name('admin.category.list');
Route::get('/category/create',[CategoryController::class,'form'])->name('admin.category.form');
Route::post('/category/post',[CategoryController::class,'postCategory'])->name('admin.category.post');
Route::get('/category/delete/{id}',[CategoryController::class,'deleteCategory'])->name('admin.category.delete');

//Product

Route::get('/product/list',[ProductController::class,'list'])->name('admin.product.list');
Route::get('/product/add',[ProductController::class,'form'])->name('admin.product.add');
Route::post('/product/post',[ProductController::class,'postProduct'])->name('admin.product.post');
Route::get('/product/view/{id}',[ProductController::class,'viewProduct'])->name('admin.product.view');
Route::get('/product/edit/{id}',[ProductController::class,'editProduct'])->name('admin.product.edit');
Route::put('/product/update/{id}',[ProductController::class,'updateProduct'])->name('admin.product.update');
Route::get('/product/delete/{id}',[ProductController::class,'deleteProduct'])->name('admin.product.delete');
Route::get('/product/search',[ProductController::class,'productSearch'])->name('admin.product.search');



Route::get('/company/list',[CompanyController::class,'list'])->name('admin.company.list');
Route::get('/company/entry',[CompanyController::class,'form'])->name('admin.company.entry');
Route::post('/company/post',[CompanyController::class,'PostCompany'])->name('admin.company.post');
Route::get('/company/delete/{id}',[CompanyController::class,'deleteCompany'])->name('admin.company.delete');

Route::get('/employee/list',[EmployeeController::class,'list'])->name('admin.employee.list');
Route::get('/employee/form',[EmployeeController::class,'form'])->name('admin.employee.form');
Route::post('/employee/post',[EmployeeController::class,'postEmployee'])->name('admin.employee.post');
Route::get('/employee/delete/{id}',[EmployeeController::class,'deleteEmployee'])->name('admin.employee.delete');


Route::get('/order/list',[OrderController::class,'list'])->name('admin.order.list');
Route::get('/order/add',[OrderController::class,'form'])->name('admin.order.add');
Route::post('/order/post',[OrderController::class,'postOrder'])->name('admin.order.post');
Route::get('/order/delete/{id}',[OrderController::class,'deleteOrder'])->name('admin.order.delete');
Route::post('/order/update/{id}',[OrderController::class,'orderUpdate'])->name('order.update');
Route::get('/order/pending',[OrderController::class,'orderPending'])->name('order.pending');
Route::get('/order/delivered',[OrderController::class,'orderDelivered'])->name('order.delivered');
Route::get('/order/processed',[OrderController::class,'orderProcessed'])->name('order.processed');


Route::get('/orderdetails/list',[OrderdetailsController::class,'list'])->name('admin.order-details.list');
Route::get('/orderdetails/add',[OrderdetailsController::class,'form'])->name('admin.order-details.add');
Route::get('/orderdetails/view/{id}',[OrderdetailsController::class,'orderview'])->name('admin.order-details.view');


});

Route::get('/user/list',[UserController::class,'list'])->name('admin.user.list');

