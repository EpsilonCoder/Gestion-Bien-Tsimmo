@include('components.design_tasnim.entete')

@include('components.design_tasnim.menu')

<div class="countainer box"><br>

<table class="table shadow mx-auto bg-white" style="width:90%">
    <thead>
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
        <th scope="col" colspan="2" class="text-center">Actions</th>
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
        <td class="text-center">
            <a href="{{'/proprietaires/recupere/'.$proprietaire->id}}"><i class="bi bi-pencil-fill" style="color:green"></i></a>
        </td>
        <td class="text-center">
          <a href="{{'/proprietaires/supprimer/'.$proprietaire->id}}"><i class="bi bi-trash-fill" style="color:red"></i></a>
        </td>
      </tr>

    @endforeach

    </tbody>
  </table>

</div>






@include('components.design_tasnim.footer')
