@extends('layouts.website')

@section('styles')
    <style>
        .content {
            position: relative;
            width: 230px;
            height: 230px;
            transform-style: preserve-3d;
            animation: animate 30s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: perspective(1000px) rotateY(0deg);
            }
            100% {
                transform: perspective(1000px) rotateY(250deg);
            }
        }

        .content span {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            transform-style: preserve-3d;
            transform-origin: center;
            transform: rotateY(calc(var(--i) * 72deg)) translateZ(450px);
            transition: transform 5s;
        }

        .content span.active {
            transform: rotateY(calc(var(--i) * 72deg)) translateZ(400px) scale(1.2);
        }
        .content span img {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            object-fit: cover;
        }

    </style>

@section('content')
<main style="padding-top: 250px; background-color: rgb(248, 247, 247);">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="content" id="carousel">
            <span style="--i:1;"><a href="{{ route('changement') }}"><img src="{{ asset('assets/site/image/image1.jpg') }}" alt=""></a></span>
            <span style="--i:2;"><a href="{{ route('watch') }}"><img src="{{ asset('assets/site/image/image2.png') }}" alt=""></a></span>
            <span style="--i:3;"><a href="{{ route('background') }}"><img src="{{ asset('assets/site/image/image3.gif') }}" alt=""></a></span>
            <span style="--i:4;"><a href=""><img src="{{ asset('assets/site/image/image4.gif') }}" alt=""></a></span>
            <span style="--i:5;"><a href="{{ route('plumes') }}"><img src="{{ asset('assets/site/image/image5.gif') }}" alt=""></a></span>
        </div>
    </div>
</main>
@endsection

@section('scripts')
    <script>
        const slides = document.querySelectorAll('.content span');
        let currentIndex = 0;

        function updateSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if (index === currentIndex) {
                    slide.classList.add('active');
                }
            });
        }

        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlides();
        }, 6000);

        updateSlides();
    </script>
@endsection
