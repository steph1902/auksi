<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    //
    public function up()
    {
    	Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lot_name');
            $table->integer('lot_appraisal');
            $table->bigInteger('lot_price');
            $table->integer('vendor_id');
            $table->timestamps();
        });
    }
    

    public function vendors()
    {
    	return $this->hasMany('App\Vendor');
    }

    protected $fillable = 
    [
    	'lot_name',
    	'lot_appraisal',
    	'lot_price',
        'vendor_id'


    ];
}
