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
        return redirect('proprietes');
    }

    public function lister()
    {
        $proprietes=Propriete::all();
        return view('propriete.list', compact('proprietes'));
    }
    //Modification dans la db
    public function supprimer($id){
        $propriete=Propriete::find($id);
        $propriete->delete();
        return redirect('proprietes')->with('status', 'Propriete supprimer');
    }
}
