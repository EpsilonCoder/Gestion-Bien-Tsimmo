@include('./components.design_tasnim.entete')

@include('./components.design_tasnim.menu')
<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Ajouter une propriete</h3>
                    <form  method="POST" action="{{ url('proprietes/enregistrer') }}">
                       @csrf
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="libelle" placeholder="Prenom" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="superficie" placeholder="nom" required>
                         </div><br>
                        
                         <div class="col-md-12">
                            <input class="form-control" type="number" name="nombrePiece" required>
                         </div>
                       <div class="col-md-12">
                            <select class="form-select mt-3" required  name="proprietaire_id" >
                                  <option value="">--Proprietaire--</option>
                                  @foreach($proprietaires as $proprietaire)
                                  <option value="{{$proprietaire->id}}">{{$proprietaire->prenom.' '.$proprietaire->nom}}</option>
                                  @endforeach

                           </select>
                       </div><br>
                       <div class="col-md-12">
                            <select class="form-select mt-3" required  name="quartier_id" >
                                  <option value="">--Quartier--</option>
                                  @foreach($quartiers as $quartier)
                                  <option value="{{$quartier->id}}">{{$quartier->libelle}}</option>
                                  @endforeach

                           </select>
                       </div><br>
                       <div class="col-md-12">
                            <select class="form-select mt-3" required  name="deduction_id" >
                                  <option value="">--Deduction--</option>
                                  @foreach($deductions as $deduction)
                                  <option value="{{$deduction->id}}">{{$deduction->montant}}</option>
                                  @endforeach

                           </select>
                       </div><br>
                       <div class="col-md-12">
                            <select class="form-select mt-3" required  name="type_id" >
                                  <option value="">--Type--</option>
                                  @foreach($types as $type)
                                  <option value="{{$type->id}}">{{$type->libelle}}</option>
                                  @endforeach

                           </select>
                       </div><br>
                       <div class="col-md-12">
                            <select class="form-select mt-3" required  name="agence_id" >
                                  <option value="">--Civilite--</option>
                                  @foreach($agences as $agence)
                                  <option value="{{$agence->id}}">{{$agence->libelle}}</option>
                                  @endforeach

                           </select>
                       </div><br>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('./components.design_tasnim.footer')