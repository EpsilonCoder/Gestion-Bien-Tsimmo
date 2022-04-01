<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Quartier;
use App\Models\Type;
use App\Models\Deduction;
use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;


class ProprieteController extends Controller
{
    public function ajout()
    {
        $types = Type::all();
        $agences = Agence::all();
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        $deductions = Deduction::all();

        return view('propriete.ajout', compact('types', 'agences', 'proprietaires', 'quartiers', 'deductions'));
    }

    public function enregistrer(Request $request)
    {

        Propriete::create([
            'libelle' => $request->libelle,
            'superficie' => $request->superficie,
            'nombrePiece' => $request->nombrePiece,
            'quartier_id' => $request->quartier_id,
            'deduction_id' => $request->deduction_id,
            'agence_id' => $request->agence_id,
            'type_id' => $request->type_id,
            'proprietaire_id' => $request->proprietaire_id
        ]);
        return redirect('proprietes')->with('status', 'Propriete ajoutee avec succees');
    }

    public function lister()
    {
        $proprietes=Propriete::all();
        return view('propriete.list', compact('proprietes'));
    }
    //Suppression dans la db
    public function supprimer($id){
        $propriete=Propriete::find($id);
        $propriete->delete();
        return redirect('proprietes')->with('status', 'Propriete supprimer');
    }
    //Recuperation de l'id a modifier
    public function recupere($id){
        $types = Type::all();
        $agences = Agence::all();
        $proprietaires = Proprietaire::all();
        $quartiers = Quartier::all();
        $deductions = Deduction::all();
        $propriete=Propriete::find($id);
        return view('propriete.edit',compact('propriete','types', 'agences', 'proprietaires', 'quartiers', 'deductions'));
    }
    //Valider la modification qui provient du form
    public function modifier(Request $request,$id){
        $propriete=Propriete::find($id);
        $propriete->libelle=$request->libelle;
        $propriete->superficie=$request->superficie;
        $propriete->nombrePiece=$request->nombrePiece;
        $propriete->quartier_id=$request->quartier_id;
        $propriete->deduction_id=$request->deduction_id;
        $propriete->agence_id=$request->agence_id;
        $propriete->type_id=$request->type_id;
        $propriete->proprietaire_id=$request->proprietaire_id;
        $propriete->update();
        if($propriete){
            return redirect('proprietes')->with('status', 'Propriete modifier avec succees');
        }
    }
}
