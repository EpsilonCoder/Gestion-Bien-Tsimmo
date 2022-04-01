@include('components.design_tasnim.entete')

@include('components.design_tasnim.menu')



<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Modifier un proprietaire</h3>
                    <form  method="POST" action="{{ url('proprietaires/modifier/'.$proprietaire->id) }}">
                       @csrf
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="prenom" value="{{$proprietaire->prenom}}" placeholder="Prenom" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nom" value="{{$proprietaire->nom}}" placeholder="nom" required>
                         </div><br>
                        
                         <div class="col-md-12">
                            <input class="form-control" type="date" name="dateNaissance" value="{{$proprietaire->dateNaissance}}" required>
                         </div>
                        
                         <div class="col-md-12">
                            <input class="form-control" type="text" name="lieuNaissance" placeholder="Lieu Naissance" value="{{$proprietaire->lieuNaissance}}" required>
                         </div>

                         <div class="col-md-12">
                            <select class="form-select mt-3" name="civilite" >
                                  <option value="{{$proprietaire->civilite}}" selected>--Civilite--</option>
                                  <option value="Marié">Marié</option>
                                  <option value="Divorcé">Divorcé</option>
                                  <option value="Célibataire">Célibataire</option>

                           </select>
                       </div><br>
                         

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="codePieceIdentite" placeholder="codePieceIdentite" value="{{$proprietaire->codePieceIdentite}}" required>
                        </div><br>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="numeroPieceIdentite" placeholder="numeroPieceIdentite" value="{{$proprietaire->numeroPieceIdentite}}" required>
                        </div><br>

                        

                        <div class="col-md-12">
                            <select class="form-select mt-3" name="genre" >
                                  <option value="{{$proprietaire->genre}}" selected>--Choisir--</option>
                                  <option value="Masculin">Masculin</option>
                                  <option value="Feminin">Feminin</option>
                           </select>
                       </div><br>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







@include('components.design_tasnim.footer')
