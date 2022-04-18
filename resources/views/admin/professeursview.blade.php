@extends('layouts/masteradmin')
@section('content')
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/stylesprofsview.css')}}">
    

    <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <h3>Les professeurs</h3>
                  
                  <div class="line"></div>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach ( $lesProfesseurs as $professeur  )
                    <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><img src="{{asset('img/prof-icon.png')}}" alt="" style="height: 200px; width:200px;">
                        <!-- Social Info-->
                        <div class="social-info"><a href="#"></a></div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6>{{ $professeur -> nom }}</h6>
                        <p class="designation">{{ $professeur -> prenom }}</p>
                        <p class="designation"><span style="color: red;">CIN :</span> {{ $professeur -> cin }}</p>
                        <p class="designation"> {{ $professeur -> email }}</p>
                        <p class="designation"><span style="color: red;">CIN :</span> {{ $professeur -> cin }}</p>
                        <p class="designation"><span style="color: red;">SPECIALITE :</span> {{ $professeur -> specialite }}</p>
                        <p class="designation"><span style="color: red;">APPARTIENT ENSAJ :</span> {{ $professeur -> appartenant_a_ENSAJ }}</p>
                        <p class="designation"><span style="color: red;">TELEPHONE :</span> {{ $professeur -> telephone }}</p>
                       <br>
                        
                        <form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Show</a></form>
                    </div>
                    </div>
                    
                </div>
                @endforeach  
             
              
              
            </div>
    </div>
@endsection