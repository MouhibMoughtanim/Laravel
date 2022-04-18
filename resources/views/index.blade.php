

@extends('layouts.app')


@section('content')
 



<div class="container">
       <div class="row">
           <div class="col-md-10 col-md-offset-2">
           
           <table class="table table-info">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Dossier_scientifique</th>
                    <th scope="col">Dossier_Pedagogique</th>
                    <th scope="col">Dossier_administratif</th>
                    
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    


                    </tr>
                </thead>
                <tbody>
                    @foreach($professeurs as $professeur)
                    <tr>
                    <td>{{$professeur->nom}}</td>
                    <td>{{$professeur->prenom}}</td>
                    <td><a href="/storage/{{$professeur->Dossier_scientifique}}"   download>Download Dossier_scientifique</a></td>
                    <td><a href="/storage/{{$professeur->Dossier_Pedagogique}}"  download>Download Dossier_Pedagogique</a></td>
                    <td><a href="/storage/{{$professeur->Dossier_administratif}}"  download>Download Dossier_administratif</a></td>
                    
                    <td><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Show</a></form></td>
                    <td><form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">Edit</a></form></td>
              

                    </tr>
                    
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
</div>



@endsection