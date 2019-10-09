<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

    Route::get('under-construction','IndexController@underConstruction');
    Route::get('contact-us','IndexController@contactUs');
    Route::get('menu-list','IndexController@uiMenu');
    Route::get('product-category/{id}','IndexController@uiCategorisedProducts');

    Route::match(['get','post'],'/admin','AdminController@login');
    // Route::match(['get','post'],'/','AdminController@login');


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout','AdminController@logout');

//index pages
    Route::get('/','IndexController@index');


//Category/Listing page
    Route::get('/products/{url}','ProductsController@products');
    Route::get('/product/{id}','ProductsController@product');

    //Get Product Attribute price
    Route::get('/get-product-price','ProductsController@getProductPrice');


    //add to cart Route
    Route::match(['get','post'],'/add-cart','ProductsController@addToCart');

    // cart Route
    Route::match(['get','post'],'/cart','ProductsController@Cart');

    // Delete product From cart page
    Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');

    // Update Product Quantity in cart
    Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');

    //Apply Coupon
    Route::get('/cart/apply-coupon/','ProductsController@applyCoupon');

    //Users login and Register page
    Route::get('/login-register','UsersController@userLoginRegister');

    //Users Register Submit
    Route::post('/user-register','UsersController@register');

    //Users Login From submit
    Route::post('/user-login','UsersController@login');

    //Users logout
    Route::get('/user-logout','UsersController@logout');

    //All routs after login
    Route::group(['middleware'=>['frontlogin']],function(){
        //Users Account page
        Route::match(['get','post'],'account','UsersController@account');
        //Check User Current Password
        Route::post('/check-user-pwd','UsersController@chkUserPassword');
        //Update User Current Password
        Route::post('/update-user-pwd','UsersController@updatePassword');
    });

    //Check if User already exists
    Route::match(['GET','POST'],'/check-email','UsersController@checkEmail');

Route::group(['middleware'=>['auth']],function (){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@settings');
    Route::get('/admin/check-pwd','AdminController@checkPassword');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');
    //Route::post('/check-email', 'UsersController@checkEmail')->name('/check-email');
    
    //Categories

    Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
    Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
    Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
    Route::get('/admin/view-categories','CategoryController@viewCategories');

    //Product Route
    Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
    Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
    Route::get('/admin/view-products','ProductsController@viewProducts');
    Route::get('/admin/delete-product/{id}','ProductsController@deleteProduct');
    Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
    Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');

    // Products Attribute
    Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
    Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');

    Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
    Route::get('/admin/delete-attribute/{id}','ProductsController@deleteAttribute');

    //Coupon Route
    Route::match(['get','post'],'/admin/add-coupon','CouponsController@addCoupon');
    Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponsController@editCoupon');
    Route::get('/admin/view-coupons','CouponsController@viewCoupons');
    Route::get('/admin/delete-coupon/{id}','CouponsController@deleteCoupon');

    //Discount Route
    Route::match(['get','post'],'/admin/add-discount','DiscountController@addDiscount');
    Route::match(['get','post'],'/admin/edit-discount/{id}','DiscountController@editDiscount');
    Route::get('/admin/view-discount','DiscountController@viewDiscount');
    Route::get('/admin/delete-discount/{id}','DiscountController@deleteDiscount');

    //Add Banner Routes
    Route::match(['get','post'],'/admin/add-banner','BannersController@addBanner');
    Route::match(['get','post'],'/admin/edit-banner/{id}','BannersController@editBanner');
    Route::get('/admin/view-banners','BannersController@viewBanner');
    Route::get('/admin/delete-banner/{id}','BannersController@deleteBanner');


});

