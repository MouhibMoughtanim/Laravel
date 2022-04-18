@extends('layouts.app')


@section('content')
 

<form method="POST" action="{{route('professeurs.store')}}" enctype="multipart/form-data">
   @csrf
   

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="nom"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="prenom" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="telephone"></div>
    
                        <div class="col-md-12"><label class="labels">CIN</label><input type="text" class="form-control" placeholder="cin" name="cin"></div>
                        <div class="col-md-12"><label class="labels">Date de naissance</label><input type="date" class="form-control" placeholder="enter date de naissance" name="date_naissance"></div>
                        <div class="col-md-12"><label class="labels">Date de recrutement</label><input type="date" class="form-control" placeholder="enter date de recrutement" name="date_recrutement"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" name="email"></div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Specialité</label><select name="specialite" class="form-select">
                            <option value="G2E">G2E</option>
                            <option value="GI">GI</option>
                            <option value="2ITE">2ITE</option>
                        </select></div>
                        <div class="col-md-6"><label class="labels">Appartennace à ENSAJ</label><div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio"  value="Oui" name="appartenant_a_ENSAJ" >
                                    
                            <label for="appartenant_a_ENSAJ"> Non </label>
                            <input type="radio"  value="NON" name="appartenant_a_ENSAJ" >
                        </div></div>
                    </div>
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control" name="Dossier_scientifique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control" name="Dossier_Pedagogique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control" name="Dossier_administratif" >
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">ADD PROFESSEUR</button></div>
                </div>
            </div>
           
        </div>
    </div>
    </div>
    </div>
     
</form>

@endsection