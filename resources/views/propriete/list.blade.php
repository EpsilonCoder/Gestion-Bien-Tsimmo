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
        <th scope="col" colspan="2">Actions</th>
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
        <td>
            <a href="" class="btn btn-success" style="border-radius:15px;">edit</a>
        </td>
        <td>
          <a href="{{'proprietes/supprimer/'.$propriete->id}}">supp</a>
        </td>
      </tr>

    @endforeach

    </tbody>
  </table>

</div>






@include('components.design_tasnim.footer')