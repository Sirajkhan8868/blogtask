@extends('layouts.website')

@section('content')
        <div class="card-sec bg-white"
            style="border: 2px solid grey; background-image: url('{{ asset('assets/site/image/bg.avif') }}'); background-size: cover; background-position: center; height: auto; display: flex; align-items: center; justify-content: center; padding-top: 500px">
            <div class="card d-flex flex-row p-3">
                <div style="border: 4px solid grey">
                    <img src="{{ asset('assets/site/image/vip image.avif') }}" alt="" class="h-50">
                </div>
                <div class="mr-4">
                    <h6>Rejoignez-nous !
                    </h6>
                    <p>Et .....
                    </p>
                    <h6>Obtenez Voyance / Guidance en direct
                    </h6>
                    <p>Recevez Transfert énergétique
                    </p>
                    <h6>Obtenez Voyance / Guidance en direct
                    </h6>
                    <p>Recevez Transfert énergétique
                    </p>
                    <p>Obtenez 1 mois gratuit avec le code promo :

                    </p>
                </div>
            </div>

        </div>
@endsection
