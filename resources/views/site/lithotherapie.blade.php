@extends('layouts.website')

@section('styles')

@endsection

@section('content')

<div style="background-color: rgb(226, 222, 222); height: 75vh;">
    <div class="container h-100">
        <h1 class="text-center mt-5">Que recherchez vous?</h1>
        <h2 class="text-center fw-bold">___</h2>
        <div class="row h-50 d-flex justify-content-center align-items-center mt-5">
            <div class="col-sm-6 text-center">
                <img src="{{ asset('assets/site/image/external-file_edited.jpg') }}" alt="" class="rounded-circle">
                <h6 class="fs-5 mt-4 fst-italic">Boutique en ligne</h6>
                    <p class="mt-4 fs-6">Divers outils divinatoires disponibles</p>
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{ asset('assets/site/image/external-file_edited.jpg') }}" alt="" class="rounded-circle">
                <h6 class="fs-5 mt-4 fst-italic">Consultation et services</h6>
                    <p class="mt-4 fs-6">J'offre des services de consultations en plus de bien <br> d'autres: cliquez pour voir</p>
            </div>
        </div>
    </div>
</div>

@endsection
