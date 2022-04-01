@include('../components.design_tasnim.entete')

@include('../components.design_tasnim.menu')

<div class="countainer">
  @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
  @endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Libelle</th>
        <th scope="col">Superficie</th>
        <th scope="col">Pieces</th>
        <th scope="col">Propriétaire</th>
        <th scope="col">Quartier</th>
        <th scope="col">Deduction</th>
        <th scope="col">Type</th>
        <th scope="col">Agence</th>
        <th scope="col" colspan="2" class="text-center">Actions</th>
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
        <td>{{$propriete->proprietaire->prenom.' '.$propriete->proprietaire->prenom}}</td>
        <td>{{$propriete->quartier->libelle}}</td>
        <td>{{$propriete->deduction->montant}}</td>
        <td>{{$propriete->type->libelle}}</td>
        <td>{{$propriete->agence->libelle}}</td>
        <td class="text-center">
            <a href="{{'proprietes/modifier/'.$propriete->id}}"><i class="bi bi-pencil-square" style="font-size:1.5rem; color:primary"></i></a>
        </td>
        <td class="text-center">
          <a href="{{'proprietes/supprimer/'.$propriete->id}}"><i class="bi bi-trash3" style="font-size:1.5rem; color:#ce0033"></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>






@include('components.design_tasnim.footer')