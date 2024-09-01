<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanRequestFormController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[LoanRequestFormController::class,'dashboard']);
Route::prefix('RequestForm')->group(function(){
    Route::get('/createRequestForm',[LoanRequestFormController::class,'RequestForm']);
    Route::post('/createForm',[LoanRequestFormController::class,'createForm']);
    Route::get('/editForm/{id}',[LoanRequestFormController::class,'editForm']);
    Route::post('/updateLoanForm', [LoanRequestFormController::class,'updateLoanForm']);
    Route::get('/deleteForm/{id}',[LoanRequestFormController::class,'deleteForm']);
});
