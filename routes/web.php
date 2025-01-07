<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Customer\PageController as CustomerPage;
use App\Http\Controllers\Customer\DataController as CustomerPageData;
use App\Http\Controllers\Customer\Action\CreateController as CustomerCreateData;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\CustomerService\PageController as CSPage;
use App\Http\Controllers\CustomerService\DataController as CSPageData;
use App\Http\Controllers\Customer\Action\CreateController as CSCreateData;
use App\Http\Controllers\CustomerService\DatatableServerside as CSDatatableServerside;
use Illuminate\Support\Facades\View;

// Route::get('/preview-email', function () {

//     $fullname = 'John Doe';
//     $product = 'Sample Product';
//     $product_type = 'Sample Type';
//     $specs = [
//         'material_type' => 'Value 1',
//         'p_width' => '2',
//         'p_height' => '3',
//         'p_length' => '4',
//     ];


//     $emailContent = View::make('customer.emails.0003')
//         ->with(compact('fullname', 'product', 'product_type', 'specs'))
//         ->render();

//     return response($emailContent);
// });




// CUSTOMER
Route::group(['middleware'=>['customer']], function() {

    Route::controller(CustomerPage::class)->group(function () {

        Route::post('page-data',[CustomerPageData::class,'page_data']);
        Route::post('create',[CustomerCreateData::class,'create']);

        Route::get('/', 'page')->name('home');
        Route::get('/about-us', 'page')->name('about_us');
        Route::get('/products', 'page')->name('products');
        Route::get('/services', 'page')->name('services');
        Route::get('/careers', 'page')->name('careers');
        Route::get('/contact-us', 'page')->name('contact_us');
        Route::get('/activities', 'page')->name('activities');



        Route::get('/product-info/{type}/{name}', 'page')->name('product_info');
        Route::get('/request-quotation', 'page')->name('request_quotation');

    });
});


// REFRESH TOKEN
Route::get('csrf', function(){ return csrf_token(); });

// USER LOGIN
Route::controller(LoginController::class)->group(function () {

    //LOGIN FORM
    Route::get('customer-service', 'page')->name('login');

    //LOGIN AND LOGOUT
    Route::post('/authenticate','store')->name('authenticate');
    Route::post('/destroy','_destroy')->name('destroy');

});

Route::group(['prefix'=>'customer-service','middleware'=>['auth','customer-service']], function() {

    Route::post('page-data',[CSPageData::class,'page_data']);

    Route::controller(CSPage::class)->group(function () {
        Route::get('/dashboard', 'page')->name('dashboard');
        Route::get('/request-quotation-list','page')->name('request_quotation_list');
        Route::get('/request-quotation-info','page')->name('request_quotation_info');
    });

    Route::controller(CSDatatableServerside::class)->group(function () {

        Route::post('dt-all-requests-quotation', 'dt_all_requests_quotation');

    });

    // Route::controller(CSCreateData::class)->group(function(){

    //     Route::post('update-grades-encoding', 'update_grades_encoding');

    //     Route::post('sys-admin-update','sys_admin_update');

    // });

    // Route::controller(SysAdminDelete::class)->group(function(){

    //     Route::post('delete-course-list', 'delete_course_list');


    // });

    // Route::controller(SysAdminCreate::class)->group(function () {

    //     Route::post('sys-admin-create', 'sys_admin_create');

    // });

});
