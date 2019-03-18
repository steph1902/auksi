<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    public function up()
    {
    	Schema::create('vendors', function (Blueprint $table) {
            $table->increment('id')
            $table->uuid('uuid');
            $table->string('vendor_name');
            $table->date('vendor_membership');
            $table->timestamps();
        });
    }
    protected $fillable = 
    [
    	'vendor_name',
    	'vendor_membership',
        'vendor_verification'


    ];
}
