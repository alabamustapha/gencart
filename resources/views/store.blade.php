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
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                </div>
            </div>
        </div>
    </section>

    <!-- end store feature products -->

    <section class="store-department">
        <div class="container">
            <div class="jumbotron">
                <p class="dept-title">Browse Departments</p>
              <div class="dept-wrapper">
                    <img src="/images/pantry.jpg" alt="" srcset="">
                    <p class="dept-name">pasteries</p>
                </div>
            </div>
        </div>
    </section>


</div>

@endsection