<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {


            $table->increments('id');
            $table->string('vendor_name');
            $table->date('vendor_membership');
            $table->integer('vendor_verification');
            $table->string('vendor_email');
            $table->string('vendor_phone');
            $table->string('vendor_category');//perusahaan atau pribadi
            $table->string('vendor_city');
            $table->string('vendor_code');
            $table->string('vendor_NPWP');
            $table->date('vendor_MOU_date');
            $table->integer('vendor_MOU_number');

            $table->string('vendor_category_address');
            $table->string('vendor_address');
            $table->string('vendor_city');
            $table->string('vendor_postal_code');
            $table->string('vendor_address_phone');
            $table->string('vendor_fax');
            $table->string('vendor_address_handphone');


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
        Schema::dropIfExists('vendors');
    }
}
