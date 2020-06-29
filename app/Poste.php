<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bo;

class Poste extends Model
{
    public function bo()
    {
        return $this->belongsTo(Bo::class);
    }
}
