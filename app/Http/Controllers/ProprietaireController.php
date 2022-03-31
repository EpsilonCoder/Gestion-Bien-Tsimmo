<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ajout()
    {
        return view('proprietaire.ajout');
    }

    public function recuperation(Request $request)
    {

        Proprietaire::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'dateNaissance' => $request->dateNaissance,
            'lieuNaissance' => $request->lieuNaissance,
            'civilite' => $request->civilite,
            'codePieceIdentite' => $request->codePieceIdentite,
            'numeroPieceIdentite' => $request->numeroPieceIdentite,
            'genre' => $request->genre
        ]);
        return redirect('/list');
    }


    public function list()
    {
        $proprietaire = Proprietaire::all();
        return view('proprietaire.list', [
            'proprietaires' => $proprietaire
        ]);
    }
}
