@extends('index')

@section('content-dashboard')
    <h1>Dossier méteo</h1>
    <div class="container py-4">
        <div class="col-md-12 text-center">
            <br>
            <div class="mt-2">
            <img src="{{ asset('images/cartemeteo1.jpg') }}" />
            </div>
            
            <div class="col-md-12 mt-2 text-center">
            <img src="{{ asset('images/cartemeteo2.jfif') }}" class="ml-2"/>
            <img src="{{ asset('images/cartemeteo3.jfif') }}" class="ml-2"/>
            </div>
        </div>
    </div>
@endsection
