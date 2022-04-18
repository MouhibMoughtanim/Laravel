@extends('layouts.app')


@section('content')
 

<form method="POST" action="{{url('professeurs/'.$professeurs->id)}}" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">   
@csrf
   
 
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('img/prof-icon.png')}}"> <div class="form-group">
                <label for="image">Insert an image :</label>
                <input type="file" class="form-control" value="{{$professeurs->image}}" name="image" >
            </div></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{$professeurs->nom}}" name="nom"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="{{$professeurs->prenom}}" placeholder="surname" name="prenom"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$professeurs->telephone}}" name="telephone"></div>

                    <div class="col-md-12"><label class="labels">CIN</label><input type="text" class="form-control" placeholder="cin" value="{{$professeurs->cin}}" name="cin"></div>
                    <div class="col-md-12"><label class="labels">Date de naissance</label><input type="date" class="form-control" placeholder="enter date de naissance" value="{{$professeurs->date_naissance}}" name="date_naissance"></div>
                    <div class="col-md-12"><label class="labels">Date de recrutement</label><input type="date" class="form-control" placeholder="enter date de recrutement" value="{{$professeurs->date_recrutement}}" name="date_recrutement"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{$professeurs->email}}" name="email"></div>
                    <div class="form-group has-feedback" style="padding-top: 15px">
                        <label>Appartient à ENSAJ :
                            
                        </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio" name="appartenant_a_ENSAJ" value="Oui" {{ $professeurs->appartenant_a_ENSAJ=="Oui" ? 'checked' : ''}}  >
                                    
                            <label for="appartenant_a_ENSAJ"> Non </label>
                            <input type="radio" name="appartenant_a_ENSAJ"  value="Non" {{ $professeurs->appartenant_a_ENSAJ=="No" ? 'checked' : ''}}  >
                        </div>
                            
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Specialité</label><select name="specialite" class="form-select">
                        <option value="G2E" {{$professeurs->specialite=="G2E" ?'selected' :''}}>G2E</option>
                        <option value="GI" {{$professeurs->specialite=="GI" ?'selected' :''}}>GI</option>
                        <option value="2ITE" {{$professeurs->specialite=="2ITE" ?'selected' :''}}>2ITE</option>
                    </select> </div>
                </div>
               
                <div class="form-group">
                    <label for="Dossier_scientifique">Dossier scientifique :</label>
                    <input type="file" class="form-control"value="{{$professeurs->Dossier_scientifique}}" name="Dossier_scientifique" >
                </div>
                
                
                <div class="form-group">
                    <a></a>
                    <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                    <input type="file" class="form-control"value="{{$professeurs->Dossier_Pedagogique}}" name="Dossier_Pedagogique" >
                </div>

                
                <div class="form-group">
                    <label for="Dossier_administratif">Dossier administratif :</label>
                    <input type="file" class="form-control"value="{{$professeurs->Dossier_administratif}}" name="Dossier_administratif" >
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Modifier</button></div>
            </div>
        </div>
        
    </div>

</div>
</div>
</div>
</form>

@endsection