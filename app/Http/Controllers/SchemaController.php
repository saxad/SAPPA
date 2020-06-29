<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bo;
use App\Poste;

class SchemaController extends Controller
{
    public function index($id) {      

    $bo = Bo::findOrFail($id);
    $postes = Poste::where('bo_id',$bo->id)->get();
    return view('schemas',compact('bo','postes'));

    }

    public function getschema($id)
    {
        $poste = Poste::findOrFail($id);
        
        return $poste;
    }
}
