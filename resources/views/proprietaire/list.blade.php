@include('../components.design_tasnim.entete')

@include('../components.design_tasnim.menu')

<div class="countainer">

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">Lieu de Naissance</th>
        <th scope="col">Civilité</th>
        <th scope="col">Code Identité</th>
        <th scope="col">Numero Identité</th>
        <th scope="col">Actions</th>
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
