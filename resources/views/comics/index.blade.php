@extends('layouts.app')

@section('main-content')
    <div class="comics-wrapper">
        <section class="comics-section container pt-5 d-flex flex-column align-items-center">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 d-flex align-items-stretch pb-4">
                        <div class="card border-0" style="width: 100%;">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <p class="card-text text-uppercase text-white pt-2"> {{$comic['title']}} </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button>Load more</button>
        </section>
    </div>
    <!-- DC Navbar -->
    <section class="shop">
        <div class="container">
            <div class="row d-flex justify-content-around pt-5 pb-5">
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/assets/images/buy-comics-digital-comics.png') }}" alt="">
                    <p class="text-uppercase text-white m-0 ms-3">Digital Comics</p>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/assets/images/buy-comics-merchandise.png') }}" alt="">
                    <p class="text-uppercase text-white m-0 ms-3">Dc merchandise</p>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/assets/images/buy-comics-subscriptions.png') }}" alt="">
                    <p class="text-uppercase text-white m-0 ms-3">Subscription</p>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/assets/images/buy-comics-shop-locator.png') }}" alt="">
                    <p class="text-uppercase text-white m-0 ms-3">Comic shop locator</p>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/assets/images/buy-dc-power-visa.svg') }}" alt="">
                    <p class="text-uppercase text-white m-0 ms-3">Dc power visa</p>
                </div>
            </div>
        </div>
    </section>
@endsection