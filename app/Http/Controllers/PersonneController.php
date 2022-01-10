<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function list()
    {
        $personnes=Personne::all();
    
    
    return view('personnes.index',[
        'personnes'=>$personnes
    ]);
    }

    public function store()
    {
        request()->validate([
            'pseudo'=>'required'
        ]);
        $pseudo=request('pseudo');

        $personne=new Personne();
        $personne->name=$pseudo;
        $personne->save();
        return back();
    }
}
