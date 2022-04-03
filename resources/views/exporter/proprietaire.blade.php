<table border="3" class="table shadow mx-auto bg-white" style="width:90%">
    <thead>
        <th colspan="9"><img src="tasnim/img/logo.jpg" alt="" ><br>La liste des proprietaires</th>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">Lieu de Naissance</th>
        <th scope="col">Civilité</th>
        <th scope="col">Genre</th>
        <th scope="col">Code Identité</th>
        <th scope="col">Numero Identité</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($proprietaires as $proprietaire)
      <tr>
        <th scope="row">{{$proprietaire->id}}</th>
        <td>{{$proprietaire->prenom}}</td>
        <td>{{$proprietaire->nom}}</td>
        <td>{{$proprietaire->dateNaissance}}</td>
        <td>{{$proprietaire->lieuNaissance}}</td>
        <td>{{$proprietaire->civilite}}</td>
        <td>{{$proprietaire->genre}}</td>
        <td>{{$proprietaire->codePieceIdentite}}</td>
        <td>{{$proprietaire->numeroPieceIdentite}}</td>
        </td>
        
      </tr>

    @endforeach

    </tbody>
  </table>

</div>