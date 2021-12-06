<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = ['id',  'image','title','description','dateOfNew'];

    public function governorates()
    {
        return $this->belongsToMany(Governorate::class,'news_governorates');
    }
}
