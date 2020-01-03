<?php
Route::get('/', ['uses' => 'FrontController@index', 'as' => 'home']);
Route::get('/contact', ['uses' => 'ContactController@index', 'as' => 'contact']);
Route::get('/blog', ['uses' => 'BlogController@index', 'as' => 'blog']);
Route::get('/checkout', ['uses' => 'CheckoutController@index', 'as' => 'checkout']);
Route::get('/regular_page', ['uses' => 'Regular_pageController@index', 'as' => 'regular_page']);
Route::get('/produits', ['uses' => 'ShopController@index', 'as' => 'shop']);
Route::get('/single_blog', ['uses' => 'Single_blogController@index', 'as' => 'single_blog']);
Route::get('/details', ['uses' => 'Single_product_detailsController@index', 'as' => 'single_product_details']);






