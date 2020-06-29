<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Poste;

class EventController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $postes = Poste::all() ;
        $events = Event::all();
        return view('event',compact('postes','events'));
    }

    public function storeEvent(Request $request){

        $event = new Event();
        $event->poste = $request->poste ; 
        $event->comment = $request->comment ; 
        $event->treatment = $request->treatment ; 
        
        $event->save(); 
        return back()->with('sucess','outil ajouté !');


    }

    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);
        
        $event->delete();
     
        return back()->with('success','evenement supprimé !');
    }

}
