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
    //Recupere un proprietaire
    public function recupere($id){
        $proprietaire= Proprietaire::find($id);
        return view('proprietaire.edit',compact('proprietaire'));
    }
    //Modification du proprietaire
    public function modifier(Request $request,$id){
        // dd($_POST);
        $proprietaire=Proprietaire::find($id);
        $proprietaire->prenom=$request->prenom;
        $proprietaire->nom=$request->nom;
        $proprietaire->dateNaissance=$request->dateNaissance;
        $proprietaire->lieuNaissance=$request->lieuNaissance;
        $proprietaire->civilite=$request->civilite;
        $proprietaire->codePieceIdentite=$request->codePieceIdentite;
        $proprietaire->numeroPieceIdentite=$request->numeroPieceIdentite;
        $proprietaire->genre=$request->genre;
        $proprietaire->update();
        return redirect('/list');
    }

    //Suppression du proprietaire
    public function supprimer($id){
        $proprietaire=Proprietaire::find($id);
        $proprietaire->delete();
        return redirect('/list');
    }
}
