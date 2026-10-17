<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;


 Route::get('/classes',[SchoolClassController::class,'index']);
 Route::get('/classes/create',[SchoolClassController::class,'create']);
 Route::post('/classes/add',[SchoolClassController::class,'add']);
 Route::get('/classes/{id}edit',[SchoolClassController::class,'edit']);
 Route::put('/classes/{id}',[SchoolClassController::class,'update']);
 Route::get('/classes/delete{id}',[SchoolClassController::class,'delete']);

 Route::get('/students',[StudentController::class,'index']);
 Route::get('/students/create',[StudentController::class,'create']);
 Route::post('/students/add',[StudentController::class,'add']);

