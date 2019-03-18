<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //kendaraan dan lot akan jadi 1 tapi dibedakan flag
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lot_name'); //merek
            $table->integer('lot_appraisal'); //flag appraisal
            $table->bigInteger('lot_price'); //harga dasar
            
            $table->string('lot_type'); //type
            $table->string('lot_category'); //jenis
            $table->string('lot_colour'); 
            $table->string('lot_year');
            $table->string('lot_cc'); //cc mobil
            $table->string('lot_km'); //kilometer
            $table->string('lot_police_no'); //nopol mobil
            $table->string('lot_letter_no'); //surat masuk kendaraan

            

            $table->integer('vendor_id'); //foreign key




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
        Schema::dropIfExists('lots');
    }
}
