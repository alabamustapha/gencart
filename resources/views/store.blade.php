@extends('layouts.store')

@section('content')

<div class="content">

    <div class="container">
        <div class="owl-carousel owl-theme">

            <div>
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/product.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/time.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            
            </div>
            <div>                
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            </div>
        </div>
    </div>


    <section class="store-featured-product">
        <div class="container">
            <div class="jumbotron">
                
            </div>
        </div>
    </section>
</div>

@endsection