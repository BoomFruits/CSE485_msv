<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::resource('department', DepartmentController::class);
Route::get('/department/create',[DepartmentController::class,'create'])->name('department.add');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.save');
Route::get('/department/show/{id}',[DepartmentController::class,'show'])->name('department.show');
Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::put('/department/update/{id}',[DepartmentController::class,'update'])->name('department.update');
Route::delete('/department/delete/{id}',[DepartmentController::class,'destroy'])->name('department.delete');

