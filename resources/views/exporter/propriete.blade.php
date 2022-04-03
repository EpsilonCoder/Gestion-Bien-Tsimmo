

    <table border="3" class="table shadow mx-auto bg-white" style="width:90%;">
    <thead>
      <th colspan="9"><img src="tasnim/img/logo.jpg" alt="" ><br>La liste des propriétés</th>
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
          <a href=""><i class="bi bi-list-ul" ></i></a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
