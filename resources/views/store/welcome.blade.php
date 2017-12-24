<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GenCart') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Bootstrap maxcdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">



    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">




</head>
<body>
    <div id="app">

        <header class="store-lists-header">
            <div class="list-group">
                <li class="list-group-item text-center">
                    <img src="{{ asset('/images/home-logo.png')}}" width="57" alt="gencart logo" srcset="">
                </li>
            </div>
            <div class="container-fluid">
                <ul class="list-group">
                    <li class="list-group-item text-center">
                        <h2>Choose a Store to Begin shopping</h2>
                    </li>
                    <li class="list-group-item text-center">
                        <h3>Stores in <strong>{{ explode(',', auth()->user()->address)[0] }}</strong></h3>
                    </li>

                    <li class="list-group-item">
                        Filter by:
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: inline-flex;">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="petsupplies-tab" data-toggle="tab" href="#petsupplies" role="tab" aria-controls="petsupplies" aria-selected="false">Pet supplies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="meals-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="meals" aria-selected="false">Meals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="drugstores-tab" data-toggle="tab" href="#drugstores" role="tab" aria-controls="drugstores" aria-selected="false">Drugstores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="groceries-tab" data-toggle="tab" href="#groceries" role="tab" aria-controls="groceries" aria-selected="false">Groceries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="alcohol-tab" data-toggle="tab" href="#alcohol" role="tab" aria-controls="alcohol" aria-selected="false">Alcohol</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item" style="background: #f7f7f7;">Recommended stores</li>
                </ul>
            </div>
        </header> <!-- store list header ends -->

        
        <div class="container">
            <div class="tab-content" id="myTabContent">
    
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    @if(count($allstores))
                       <div class="row">
                        @foreach($allstores as $store)
                            <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <div class="card text-center">
                                    @if($store->logo)
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('storage/' . $store->logo) }}" alt="{{$store->name}}">
                                    </a>
                                    @else
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('images/cart-logo.png') }}" alt="{{$store->name}}">
                                    </a>
                                    @endif


                                    <div class="card-body">
                                    <a href="{{route('show_store', $store->slug)}}">
                                        <h4 class="card-title">{{ $store->name }}</h4>
                                    </a>
                                    <p class="card-text"><small class="text-muted" style="font-size: 13px">Groceries &middot; Organic &middot; Specialty </small></p>
                                    </div>
                                </div>              
                                
                            </div>
                            </div>
                        @endforeach
                       </div>
                    @endif
                    
                </div>

                <div class="tab-pane fade" id="petsupplies" role="tabpanel" aria-labelledby="petsupplies-tab">
                    <div class="card-columns">
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

                <div class="tab-pane fade" id="meals" role="tabpanel" aria-labelledby="meals-tab">
                    <div class="card-columns">
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

                <div class="tab-pane fade" id="drugstores" role="tabpanel" aria-labelledby="drugstores-tab">
                    <div class="card-columns">
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

                <div class="tab-pane fade" id="groceries" role="tabpanel" aria-labelledby="groceries-tab">
                    <div class="card-columns">
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

                <div class="tab-pane fade" id="alcohol" role="tabpanel" aria-labelledby="alcohol-tab">
                    <div class="card-columns">
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

            </div> <!-- tab ends here -->
        </div> <!-- container ends here -->


        <footer class="store-lists-footer">
            <div class="list-group">
                <li class="list-group-item text-center">
                    <p class="disclaimer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente vel nulla inventore illum minima exercitationem! Expedita, quod maiores facilis tempora nisi asperiores libero! Provident, neque ipsum veniam labore ratione sint? </p>
                </li>
            </div>
        </footer> <!-- store list footer ends -->

    </div> <!-- app ends here -->
    <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
