@extends('layouts.app')


@section('content')
 

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed  px-6 py-4 sm:block" style="margin: auto;">
                    @auth
                     <a href="{{ url('/professeurs') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Home</a>
                    
                    @else
                        

                        @if (Route::has('register'))
                            
                        @endif
                    @endauth
                </div>
            @endif

            
            
        </div>
        @endsection
