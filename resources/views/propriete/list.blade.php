@include('components.design_tasnim.entete')

@include('components.design_tasnim.menu')

  
  <div class="countainer box"><br>
    @if(session('status'))
          <div class="alert alert-success">
              {{session('status')}}
          </div>
    @endif

    <table class="table shadow mx-auto bg-white" style="width:90%;">
    <thead>
      <tr>
        <th scope="col">ID</th>
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
    @foreach ($proprietes as $propriete)
      <tr>
        <th scope="row shadow">{{$propriete->id}}</th>
        <td>{{$propriete->libelle}}</td>
        <td>{{$propriete->superficie}}</td>
        <td>{{$propriete->nombrePiece}}</td>
        <td>{{$propriete->proprietaire->prenom.' '.$propriete->proprietaire->prenom}}</td>
        <td>{{$propriete->quartier->libelle}}</td>
        <td>{{$propriete->deduction->montant}}</td>
        <td>{{$propriete->type->libelle}}</td>
        <td>{{$propriete->agence->libelle}}</td>
        <td class="text-center">
            <a href="{{'proprietes/recupere/'.$propriete->id}}"><i class="bi bi-pencil-fill" style="color:blue"></i></a>
        </td>
        <td class="text-center">
          <a href="{{'proprietes/supprimer/'.$propriete->id}}"><i class="bi bi-trash" style="color:red"></i></a>
        </td>

        <td class="text-center">
          <a href=""><i class="bi bi-list-ul" ></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>

@include('components.design_tasnim.footer')