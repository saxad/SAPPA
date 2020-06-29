<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Bo extends Model
{
       function department(){
        return $this->belongsTo(Department::class);
    }
}
