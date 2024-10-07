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

use Modules\Documents\Http\Controllers\DocumentsController;

Route::prefix('documents')->group(function() {
    Route::get('/', 'DocumentsController@index')->name('documents.index');
});

Route::post('/addcompany',[DocumentsController::class,'storecompany'])->name('addnewcompany');

Route::post('/add_doc',[DocumentsController::class,'store_doc'])->name('add_doc');

Route::get('/all_docs',[DocumentsController::class,'get_all_docs'])->name('alldoc');
