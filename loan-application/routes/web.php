<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanRequestFormController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('RequestForm')->group(function(){
    Route::get('/',[LoanRequestFormController::class,'RequestForm']);
    Route::post('/createForm',[LoanRequestFormController::class,'createForm']);
});
