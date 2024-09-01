<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loanrequestform', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->date('dob');
            $table->enum('marital_status',['single','married','other']);
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->string('address');
            $table->string('occupation');
            $table->integer('desired_loan_amount');
            $table->integer('annual_income');
            $table->string('loan_used_for');
            $table->integer('down_payment_amount');
            $table->string('institution_name');
            $table->string('saving_account_number');
            $table->string('agree_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loanrequestform');
    }
};