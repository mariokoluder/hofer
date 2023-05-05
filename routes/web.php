<?php

use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function () {
  Route::resource('discs', DiscController::class);
  Route::resource('manufacturers', ManufacturerController::class);
  Route::resource('grades', GradeController::class);
  Route::get('grades/{grade}/coef', [GradeController::class, 'coef'])->name('grades.coef');
  Route::resource('products', ProductController::class);
  Route::resource('products.inserts', InsertController::class);
  Route::resource('work_orders', WorkOrderController::class);
  Route::resource('operations', OperationController::class);
  Route::resource('operations.cut_inserts', CutInsertController::class);
});

Route::get('/', function () {
  return view('index');
});
