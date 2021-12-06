<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //


    protected $table = 'contacts';
    protected $fillable = ['id', 'fullName','governorate_id','subject','mobileNumber','email','message'];


    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }

}
