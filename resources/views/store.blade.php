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
                <p class="featured-products">Featured Products</p>
                <div class="card-columns">
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            </div>
                        </div>              
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            </div>
                        </div>              
                        <div class="card text-center">
                            <a href="#">
                                <img class="card-img-top card-img-rounded" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">Whole Foods</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                            </div>
                        </div>              
                        
                    </div>
            </div>
        </div>
    </section>
</div>

@endsection