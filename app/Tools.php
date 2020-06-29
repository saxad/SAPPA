<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Tools extends Model
{
    protected $fillable = ['name','url','description','category_id'];

     public function categories()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }
}
