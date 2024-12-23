@extends('layouts.website')

@section('styles')



@endsection


@section('content')
    <div style="background-color: rgb(250, 248, 247); padding-top: 400px">
        <div class="container">
            <div class="row mt-5 ">
                <div class="col-sm-10 text-center mt-5">
                    <h6 class="fs-1">Divinatory tools
                    </h6>

                    <p class="fs-6 mt-5">
                        The fortune telling is the ability to read, see and feel the energies that help define a person, a
                        situation or a path, when a life situation, whether <br> positive or negative, presents itself. To
                        respond and find solutions, a seeing uses divinatory tools that will help the situation move forward
                        as <br> best as possible and in harmony with the subject.
                    </p>

                    <p class="fs-6 mt-5">
                        Everyone can obtain or make their own divinatory tools. But the difficulty lies in their
                        interpretations. In this regard, a good psychic is useful in <br> delivering the right messages to you
                        and helping you decode the best solutions to live your life in harmony.
                    </p>

                    <p style="text-decoration: underline" class="mb-1 mt-4 fs-6">
                        The Crystal Ball
                    </p>
                    <p style="text-decoration: underline" class="mb-1 fs-6">
                        Divination cards
                    </p>
                    <p style="text-decoration: underline" class="mb-1 fs-6">
                        The candles
                    </p>
                    <p style="text-decoration: underline" class="mb-1 fs-6">
                        The divination board
                    </p>
                    <p style="text-decoration: underline" class="mb-1 fs-6">
                        The pendulum
                    </p>
                    <p style="text-decoration: underline" class="mb-1 pb-5 fs-6">
                        The runes</p>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="{{ asset('assets/site/image/old-books.jpg') }}" alt="" >
                </div>
            </div>
        </div>
    </div>
@endsection
