<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sku_number'); //SKXXX
            $table->date('sku_date');
            $table->string('sku_status');

            $table->string('sku_no_keluar');
            $table->string('sku_keterangan');
            $table->string('sku_diketahui_oleh');
            $table->string('sku_security');
            $table->string('sku_diserahkan_oleh');
            $table->string('sku_diterima_oleh');
            $table->string('sku_diminta_oleh');
            $table->string('sku_dibuat_oleh');
            $table->string('sku_diproses_oleh');

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
        Schema::dropIfExists('sku');
    }
}
