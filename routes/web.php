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

Route::get('/', 'FrontendController@index');
Route::get('/view/products', 'FrontendController@view_product');
Route::get('/service/details', 'FrontendController@service_details');
Route::get('/supports', 'FrontendController@supports');
Route::post('/custom/question', 'FrontendController@customer_question');
Route::get('/blog', 'FrontendController@show_blog');
Route::get('/blog/details/{id}', 'FrontendController@show_blog_details');
Route::post('/post/comments', 'FrontendController@show_blog_post_comments');
Route::get('/product/details/{id}', 'FrontendController@product_details');
Route::get('/service/register', 'FrontendController@product_service_register');
Route::post('/product/service/request', 'FrontendController@product_service_request');
Route::get('/contact-us', 'FrontendController@contactUs');
Route::post('/contact-info-store', 'FrontendController@contactUsStore');

Auth::routes(['register' => false, '.env' => false]);

Route::get('/home', 'HomeController@index');

//Backend Work Controller

//Slider Controller Work
Route::get('/add/slider', 'SliderController@add_slider');
Route::post('/save/slider', 'SliderController@save_slider');
Route::get('/active/slider/{id}', 'SliderController@active_slider');
Route::get('/pending/slider/{id}', 'SliderController@pending_slider');
Route::get('/delete/slider/{id}', 'SliderController@delete_slider');


//Product Controller Work
Route::get('/add/product', 'ProductController@add_product');
Route::post('/save/product', 'ProductController@save_product');
Route::get('/active/product/{id}', 'ProductController@active_product');
Route::get('/pending/product/{id}', 'ProductController@pending_product');
Route::get('/delete/product/{id}', 'ProductController@delete_product');

//Service Controller Work
Route::get('/add/service', 'ServiceController@add_service');
Route::post('/save/service', 'ServiceController@save_service');
Route::get('/active/service/{id}', 'ServiceController@active_service');
Route::get('/pending/service/{id}', 'ServiceController@pending_service');
Route::get('/delete/service/{id}', 'ServiceController@delete_service');


//SupportController
Route::get('/add/support', 'SupportController@add_support');
Route::post('/save/support', 'SupportController@save_support');
Route::get('/active/support/{id}', 'SupportController@active_support');
Route::get('/pending/support/{id}', 'SupportController@pending_support');
Route::get('/delete/support/{id}', 'SupportController@delete_support');

//CustomerController
Route::get('/add/customer/question', 'CustomerQuestion@add_customer_question');
Route::get('/active/customer/question/{id}', 'CustomerQuestion@active_customer_question');
Route::get('/pending/customer/question/{id}', 'CustomerQuestion@pending_customer_question');
Route::get('/edit/customer/question/{id}', 'CustomerQuestion@edit_customer_question');
Route::post('/customer/question/answer', 'CustomerQuestion@update_customer_question');
Route::get('/delete/customer/question/{id}', 'CustomerQuestion@delete_customer_question');

//BlogController
Route::get('/add/blog', 'BlogController@add_blog');
Route::post('/save/blog/post', 'BlogController@save_blog_post');
Route::get('/active/blog/post/{id}', 'BlogController@active_blog_post');
Route::get('/pending/blog/post/{id}', 'BlogController@pending_blog_post');
Route::get('/edit/blog/post/{id}', 'BlogController@edit_blog_post');
Route::post('/update/blog/post', 'BlogController@update_blog_post');
Route::get('/delete/blog/post/{id}', 'BlogController@delete_blog_post');


//TagController
Route::get('/add/tag', 'BlogController@add_tag');
Route::post('/save/blog/tag', 'BlogController@save_blog_tag');
//Route::get('/get/blog/tag', 'BlogController@get_deposit');
Route::get('/active/blog/tag/{id}', 'BlogController@active_blog_tag');
Route::get('/pending/blog/tag/{id}', 'BlogController@pending_blog_tag');
Route::get('/edit/blog/tag/{id}', 'BlogController@edit_blog_tag');
Route::post('/update/blog/tag', 'BlogController@update_blog_tag');
Route::get('/delete/blog/tag/{id}', 'BlogController@delete_blog_tag');
