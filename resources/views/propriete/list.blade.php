@include('../components.design_tasnim.entete')

@include('../components.design_tasnim.menu')

<div class="countainer">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Libelle</th>
        <th scope="col">Superficie</th>
        <th scope="col">Nombre de pieces</th>
        <th scope="col">Quartier</th>
        <th scope="col">Deduction</th>
        <th scope="col">Type</th>
        <th scope="col">Propriétaire</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <!--J ai pas pu tous gerer -->
    @foreach ($proprietes as $propriete)
      <tr>
        <th scope="row">{{$propriete->id}}</th>
        <td>{{$propriete->libelle}}</td>
        <td>{{$propriete->superficie}}</td>
        <td>{{$propriete->nombrePiece}}</td>
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