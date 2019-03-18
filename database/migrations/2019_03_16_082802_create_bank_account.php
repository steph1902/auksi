<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bank_account_branch'); //yes or no
            $table->string('bank_branch_location');
            $table->string('bank_name');
            $table->string('bank_branch_name');
            $table->string('bank_account_name');
            $table->string('bank_account_number');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_account');
    }
}
