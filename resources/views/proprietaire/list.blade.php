@include('../components.design_tasnim.entete')

@include('../components.design_tasnim.menu')

<div class="countainer">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Date Naissance</th>
        <th scope="col">Lieu de Naissance</th>
        <th scope="col">Civilité</th>
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
        <td>{{$proprietaire->codePieceIdentite}}</td>
        <td>{{$proprietaire->numeroPieceIdentite}}</td>
        <td class="text-center">
            <a href="{{'proprietaires/recupere/'.$proprietaire->id}}"><i class="bi bi-pencil-square" style="color:blue"></i></a>
        </td>
        <td class="text-center">
          <a href="{{'proprietaires/supprimer/'.$proprietaire->id}}"><i class="bi bi-trash3" style="color:#ce0033"></i></a>
        </td>
      </tr>

    @endforeach

    </tbody>
  </table>

</div>






@include('components.design_tasnim.footer')
