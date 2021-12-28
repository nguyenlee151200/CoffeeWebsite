<?php

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



Route::get('/', 'PageController@home')->name('home_page');
Route::get('/menu', 'PageController@getMenu')->name('menu');
Route::get('/pay/{id}', 'PageController@getPay')->name('pay');
Route::post('/cart', 'CartController@ddCart')->name('add_cart');
Route::get('/get-cart', 'CartController@getCart')->name('get_cart');
Route::post('/update/{id}', 'CartController@updateCart')->name('update_cart');
Route::get('cart-remove/{id}','CartController@removeCart')->name('cart.remove_cart');
Route::get('/payment', 'CartController@getPayment')->name('get_payment');
Route::post('/payment', 'CartController@postPayment')->name('post_payment');

Route::get('/about', 'PageController@about')->name('about');
Route::get('/detail-news/{id}', 'PageController@getDetailNews')->name('detail_news');



Route::get('news','PageController@getNews')->name('news.getnews');

Route::get('/cms', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::group(['prefix' => 'admins','middleware' => ['admin']], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    Route::prefix('cates')->group(function () {
        Route::get('/', 'CategoryController@index')->name('cates.list');
        Route::get('/add', 'CategoryController@getAdd')->name('cates.get_add');
        Route::post('/add', 'CategoryController@postAdd')->name('cates.post_add');
        route::get("/edit/{id}", "CategoryController@getEdit")->name("cates.get_edit");
        route::post("/edit/{id}", "CategoryController@postEdit")->name("cates.post_edit");
        route::get("/del/{id}", "CategoryController@getdel")->name("cates.get_delete");
    });


    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('products.list');
        Route::get('/add', 'ProductController@getAdd')->name('products.get_add');
        Route::post('/add', 'ProductController@postAdd')->name('products.post_add');
        route::get("/edit/{id}", "ProductController@getEdit")->name("products.get_edit");
        route::post("/edit/{id}", "ProductController@postEdit")->name("products.post_edit");
        route::get("/del/{id}", "ProductController@getdel")->name("products.get_delete");

        Route::get('/{id}/variants', 'ProductController@getVariants')->name('products.get_variants');
        Route::get('/{id}/variants/delete/{id_variants}', 'ProductController@deleteVariants')->name('products.delete_variants');

        Route::get('/{id}/aad-variants', 'ProductController@getAddVariants')->name('products.get_add_variants');
        Route::post('/{id}/aad-variants', 'ProductController@postAddVariants')->name('products.post_add_variants');

//        Route::get('/{id}/variants/edit/{id_variants}', 'ProductController@getEditVariants')->name('products.get_edit_variants');

        route::get("/del/{id}/{id_image}", "ProductController@getdelImageDetail")->name("products.get_delete_image_detail");


    });

    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostController@index')->name('posts.list');
        Route::get('/add', 'PostController@getAdd')->name('posts.get_add');
        Route::post('/add', 'PostController@postAdd')->name('posts.post_add');
        route::get("/edit/{id}", "PostController@getEdit")->name("posts.get_edit");
        route::post("/edit/{id}", "PostController@postEdit")->name("posts.post_edit");
        route::get("/del/{id}", "PostController@getdel")->name("posts.delete");
    });

    Route::prefix('order')->group(function () {
        Route::get('/', 'OrderController@index')->name('order.list');
        Route::get('/detail/{id}', 'OrderController@getDetail')->name('order.get_detail');
        Route::get('/danh-sach-don-hang-da-thanh-toan', 'OrderController@donHangDaThanhToan')->name('order.da_thanh_toan');
        Route::get('/danh-sach-don-hang-chua-thanh-toan', 'OrderController@donHangChuaThanhToan')->name('order.chua_thanh_toan');

        route::get("/xac-nhan-thanh-toan/{id}", "OrderController@xacNhanThanhToan")->name("order.xac_nhan_thanh_toan");

        route::get("/del/{id}", "OrderController@getdel")->name("order.get_delete");
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('admin-login', 'Auth\AdminLoginController@login')->name('post.login_admin');
Route::get('logout-admin', 'Auth\AdminLoginController@logout')->name('admin.logout');
