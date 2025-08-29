<?php
Route::group(['namespace' => 'Front'], function () {
    Route::get('/','FrontController@homePage')->name('front.home-page');
    Route::get('/san-pham/{slug?}','FrontController@getProductList')->name('front.getProductList');
    Route::get('/chi-tiet-san-pham/{slug?}','FrontController@getProductDetail')->name('front.getProductDetail');

    Route::get('/du-an','FrontController@projects')->name('front.projects');
    Route::get('/chi-tiet-du-an/{slug}','FrontController@getProjectDetail')->name('front.getProjectDetail');

    Route::get('/dich-vu','FrontController@services')->name('front.services');
    Route::get('/chi-tiet-dich-vu/{slug}','FrontController@getServiceDetail')->name('front.getServiceDetail');

    Route::get('/tin-tuc','FrontController@blogs')->name('front.blogs');
    Route::get('/chi-tiet-tin-tuc/{slug}','FrontController@blogDetail')->name('front.blogDetail');
    Route::get('/gioi-thieu','FrontController@abouts')->name('front.abouts');


    Route::get('/lien-he','FrontController@contact')->name('front.contact');
    Route::post('/postContact','FrontController@postContact')->name('front.submitContact');

    Route::get('/tim-kiem','FrontController@searchProduct')->name('front.searchProduct');


    Route::get('onlyme/clear', 'FrontController@clearData')->name('front.clearData');

    Route::get('/{any}', function () {
        // Laravel tự load view errors/404.blade.php khi abort(404)
        abort(404);
    })
        ->where('any', '.*');

});




