<?php

namespace App\Http\Controllers;
use App\Chaussette;

use Illuminate\Http\Request;

class ChaussettesController extends Controller
{
    public function index()
    {
        $chaussettes = Chaussette::all();
        return view('chaussettes/chaussettesListView', compact('chaussettes'));
    }

    public function create()
    {
        return view('chaussettes/chaussettesCreateView');
    }

    public function store()
    {
        $nouvelleChaussette = new Chaussette;
        $nouvelleChaussette->couleur = request()->couleur;
        if (request()->propre =="on") {
            $nouvelleChaussette->propre = 1;
        }
        else
        {
            $nouvelleChaussette->propre = 0;
        }

        $nouvelleChaussette->save();

        return redirect('/chaussettes');
    }
}
