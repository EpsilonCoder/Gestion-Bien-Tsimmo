@include('components.design_tasnim.entete')

@include('components.design_tasnim.menu')



<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Ajouter une proprietaire</h3>
                    <form  method="POST" action="{{ url('proprietaire') }}">
                       @csrf
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="prenom" placeholder="Prenom" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nom" placeholder="nom" required>
                         </div><br>
                        
                         <div class="col-md-12">
                            <input class="form-control" type="date" name="dateNaissance" required>
                         </div>
                        
                         <div class="col-md-12">
                            <input class="form-control" type="text" name="lieuNaissance" placeholder="Lieu Naissance" required>
                         </div>

                         <div class="col-md-12">
                            <select class="form-select mt-3" required  name="civilite" >
                                  <option name="">--Civilite--</option>
                                  <option name="civilite">Marié</option>
                                  <option name="civilite">Divorcé</option>
                                  <option name="civilite">Célibataire</option>

                           </select>
                       </div><br>
                         

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="codePieceIdentite" placeholder="codePieceIdentite" required>
                        </div><br>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="numeroPieceIdentite" placeholder="numeroPieceIdentite" required>
                        </div><br>

                        

                        <div class="col-md-12">
                            <select class="form-select mt-3" required  name="genre" >
                                  <option name="">--Choisir--</option>
                                  <option name="genre">masculin</option>
                                  <option name="genre">feminin</option>
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







@include('components.design_tasnim.footer')
