<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactdetail extends Model
{
    protected $table='contactdetails';

    protected $fillable=['id','name','email','email_verified_at','message'];

}
