<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tech Solution Digital Agency
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('services')->group(function () {
    Route::get('/web-development', function () {
        return view('pages.services.web-development');
    });

    Route::get('/mobile-apps', function () {
        return view('pages.services.mobile-apps');
    });

    Route::get('/seo-optimization', function () {
        return view('pages.services.seo-optimization');
    });

    Route::get('/odoo-erp', function () {
        return view('pages.services.odoo-erp');
    });

    Route::get('/ai-automation', function () {
        return view('pages.services.ai-automation');
    });

    Route::get('/cloud-computing', function () {
        return view('pages.services.cloud-computing');
    });
});
