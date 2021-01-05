<?php
//
//use Illuminate\Http\Request;
//
///*
//|--------------------------------------------------------------------------
//| API Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register API routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| is assigned the "api" middleware group. Enjoy building your API!
//|
//*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::group(['middleware' => ['ipcheck']], function () {
//    Route::resource('users', \Api\Auth\AuthController::class);
//    Route::resource('products', \Api\Catalogue\Products\ProductController::class);
//    Route::resource('categories', Api\Catalogue\CategoryController::class);
////    Route::resource('pages', \Api\Stores\PageController::class);
//    Route::resource('stores', \Api\Stores\StoreController::class);
//    Route::resource('orders', \Api\Sales\Orders\OrderController::class);
//    Route::resource('transactions', \Api\Sales\Transactions\TransactionController::class);
//    Route::resource('licenses', \Api\Services\Licenses\LicensesController::class);
//    Route::get('users/{userId}/licenses',
//        '\App\Http\Controllers\Api\Services\Licenses\LicensesController@userLicenses');
//    Route::get('users/{userId}/payments',
//        '\App\Http\Controllers\Api\Services\Payments\PaymentController@userPayments');
//    Route::get('stores/{storeId}/pages/{pageName}', '\App\Http\Controllers\Api\Stores\StorePageController@show');
//    Route::get('stores/{storeId}/categories/{slug}', '\App\Http\Controllers\Api\Stores\StoreCategoriesController@show');
//    Route::get('stores/{storeId}/products/{slug}', '\App\Http\Controllers\Api\Stores\StoreProductsController@show');
//    Route::get('stores/{storeId}/products', '\App\Http\Controllers\Api\Stores\StoreProductsController@index');
//});