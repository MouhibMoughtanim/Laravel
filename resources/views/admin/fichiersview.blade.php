@extends('layouts/masteradmin')
@section('content')
    


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        body{
    margin-top:20px;
    background:#eee;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}
.bgc-h-secondary-l3:hover, .bgc-secondary-l3 {
    background-color: #ebeff1!important;
}
.h-4 {
    height: 2rem;
}
.w-4 {
    width: 2rem;
}
.d-zoom-1, .d-zoom-2, .d-zoom-3, .dh-zoom-1, .dh-zoom-2, .dh-zoom-3 {
    transition: -webkit-transform 180ms;
    transition: transform 180ms;
    transition: transform 180ms,-webkit-transform 180ms;
}
.mr-25, .mx-25 {
    margin-right: .75rem!important;
}

.p-25 {
    padding: .75rem!important;
}
.radius-1 {
    border-radius: .25rem!important;
}
[class*=bgc-h-] {
    transition: background-color .15s;
}

.text-default-d3 {
    color: #416578!important;
}
.font-bolder, .text-600 {
    font-weight: 600!important;
}
.text-90 {
    font-size: .9em!important;
}


.bgc-h-secondary-l4:hover, .bgc-secondary-l4 {
    background-color: #f2f4f6!important;
}
.text-danger-m1 {
    color: #da3636!important;
}
.text-green-m1 {
    color: #2c8d6a!important;
}
.text-95 {
    font-size: .95em!important;
}
    </style>

<div class="container" style="margin-bottom: 100px;">
    <div class="row">
        <div class="col-md-5">
            <div class="card ccard radius-t-0 h-100">
                <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div>
                <!-- the blue line on top -->

                <div class="card-header pb-3 brc-secondary-l3">
                    <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                        Transfers
                    </h5>
                </div>
              
                <div class="card-body pt-2 pb-1">
                    @foreach($lesProfesseurs as $professeur)
                    <div role="button" class="d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-style">
                        
                        <tr>
                            <div class="card-header pb-3 brc-secondary-l3">
                                <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                                    <td>{{$professeur->nom}}</td>
                                    <td>{{$professeur->prenom}}</td>
                                </h5>
                            </div>
                        
                        <td><a href="/storage/{{$professeur->Dossier_scientifique}}"   download>Download Dossier_scientifique</a></td>
                        <td><a href="/storage/{{$professeur->Dossier_Pedagogique}}"  download>Download Dossier_Pedagogique</a></td>
                        <td><a href="/storage/{{$professeur->Dossier_administratif}}"  download>Download Dossier_administratif</a></td>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection