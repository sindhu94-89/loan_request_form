<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanRequestFormController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('RequestForm')->group(function(){
    Route::get('/dashboard',[LoanRequestFormController::class,'dashboard']);
    Route::get('/RequestForm',[LoanRequestFormController::class,'RequestForm']);
    Route::post('/createForm',[LoanRequestFormController::class,'createForm']);
    Route::get('/editForm/{id}',[LoanRequestFormController::class,'editForm']);
    Route::post('/updateLoanForm', [LoanRequestFormController::class,'updateLoanForm']);
    Route::get('/deleteForm/{id}',[LoanRequestFormController::class,'deleteForm']);
});
