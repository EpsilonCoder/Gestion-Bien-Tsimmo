@include('../components.design_tasnim.entete')

@include('../components.design_tasnim.menu')

<div class="countainer">

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ID</th>
        <th scope="col">Libelle</th>
        <th scope="col">Superficie</th>
        <th scope="col">Nombre_de_Piece</th>
        <th scope="col">Quartier_id</th>
        <th scope="col">Deduction</th>
        <th scope="col">Type</th>
        <th scope="col">Propriétaire</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <!--J ai pas pu tous gerer -->
    @foreach ($proprietaires as $proprietaire)
      <tr>
        <th scope="row">{{$proprietaire->id}}</th>
        <td>{{$proprietaire->prenom}}</td>
        <td>{{$proprietaire->nom}}</td>
        <td>{{$proprietaire->dateNaissance}}</td>
        <td>{{$proprietaire->lieuNaissance}}</td>
        <td>{{$proprietaire->civilite}}</td>
        <td>{{$proprietaire->codePieceIdentite}}</td>
        <td>{{$proprietaire->numeroPieceIdentite}}</td>
        <td>
            <a href="" class="btn btn-success" style="border-radius:15px; ">Modifier</a>
            <a href="" class="btn btn-danger" style="border-radius:15px; ">Supprimer</a>
        </td>
      </tr>

    @endforeach

    </tbody>
  </table>

</div>






@include('components.design_tasnim.footer')