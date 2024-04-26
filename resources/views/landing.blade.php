@extends('home')

@section('hero')
    <section id="home">
        <div class="container">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-7">
                    <h3>Experience the luxurios teste of</h3>
                    <h1 class="display-4 title-hero ">🙌Red Velvet Latte!🙌 </h1>
                    <p class="lead">Nikmati hari santaimu dengan tenaang dan fokus!</p>
                    <a class="btn  btn-primary btn-lg " href="#" role="button">Beli sekarang ! </a>
                </div>
                <div class="col-5 img-hero ">
                    <img src="{{ asset('img/coffe.jpeg') }}" alt="Image brand"
                        class="w-100 img-fluid img-thumbnail shadow ">
                </div>
            </div>
        </div>
    </section>

    <div class="container bg-primary rounded" id="list-product">
        <div class="row w-100 my-5">
            <h1 class="font-weight-bold text-center text-light">PRODUCT</h1>
            <div class="grid mt-4 mx-3">
                <div class="row row-gap-4  mb-5">
                    @foreach ($products as $product)
                        <div class="col-4">
                            <div class="card" style="width: 18rem; ">
                                <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="d-flex justify-between">

                                        <h5 class="card-title">{{ $product['menu'] }}</h5>
                                        <p class="card-text">{{ $product['Price'] }}</p>
                                    </div>
                                    <div class="">
                                        <p>{{ $product['description'] }}</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
