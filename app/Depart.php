<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Poste;

class Depart extends Model
{
    public function poste()
    {
        return $this->belongsTo(Poste::class);
    }
}
