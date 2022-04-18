
@extends('layouts.app')

@section('content')
 




<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('img/prof-icon.png')}}"><span class="font-weight-bold">{{$professeur->nom}} {{$professeur->prenom}}</span><span class="text-black-50">{{$professeur->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="{{$professeur->nom}}" disabled></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="{{$professeur->prenom}}" placeholder="surname" disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$professeur->telephone}}" disabled></div>

                    <div class="col-md-12"><label class="labels">CIN</label><input type="text" class="form-control" placeholder="cin" value="{{$professeur->cin}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Date de naissance</label><input type="text" class="form-control" placeholder="enter date de naissance" value="{{$professeur->date_naissance}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Date de recrutement</label><input type="text" class="form-control" placeholder="enter date de recrutement" value="{{$professeur->date_recrutement}}" disabled></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="{{$professeur->email}}" disabled></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Specialité</label><input type="text" class="form-control" placeholder="specialité" value="{{$professeur->specialite}}" disabled></div>
                    <div class="col-md-6"><label class="labels">Appartennace à ENSAJ</label><input type="text" class="form-control" value="{{$professeur->appartenant_a_ENSAJ}}" placeholder="state" disabled></div>
                </div>
                <div class="mt-5 text-center"><a href="{{ url('/professeurs') }}"><button class="btn btn-primary profile-button" type="button">BACK TO HOME</button></div>
            </div>
        </div>
       
    </div>
</div>
</div>
</div>

@endsection
