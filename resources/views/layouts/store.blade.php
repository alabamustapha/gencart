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
<body style="background-color: #f7f7f7;">
    <div id="app">

        <header class="store-header">
            
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <a class="navbar-brand" href="#">
                <img src="{{ asset('images/cart-logo.png')}}" width="57" class="d-inline-block align-middle" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Store<span class="sr-only">(Store)</span>
                            </a>
                            <div id="store-list-dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">


                                <header class="store-lists-header">
                                    <div class="container">
                                        <ul class="list-group">
                                            <li class="list-group-item text-center">
                                                <h3>Stores in <strong>Medina</strong></h3>
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


                                <div class="store_overlay"></div>





                                <div class="container">
                                    <div class="tab-content" id="myTabContent">
                            
                                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
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




                                
                            </div>
                        </li>
    
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-map-marker" aria-hidden="true"></i> 94578</a>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Store<span class="sr-only">(Store)</span>
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Hi, Name</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Your Account</a>
                                    <a class="dropdown-item" href="#">Your Order</a>
                                    <a class="dropdown-item" href="#">Add Promo Code</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Group Carts</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-gift"></i> Buy Gift Cards</a>
                                    <a class="dropdown-item" href="#">GenCart Express</a>
                                    <a class="dropdown-item" href="#">How Instacart Works</a>
                                    <a class="dropdown-item" href="#">Lists and Recipes</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                    <div class="dropdown-divider"></div>
                                </div>
                        </li>
    
                        <li class="nav-item">
                            <a href="#" class="nav-link">Help</a>
                        </li>
    
                    </ul>
                    
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-shopping-cart"></i>  Cart</button>
                    </form>
                </div>
            </nav> 


            <div class="store-header-inner-wrapper" style="opacity: 1;">
                <div class="store-header-logo" aria-hidden="true">
                    <img src="{{ asset('images/new-logo.png')}}" width="156" height="156" alt="{{$storename}}">
                </div>
                <h1>{{ $storename }}</h1>
                <div class="store-header-retailer-info">
                    <p class="store-header-price-transparency text-center same">
                        <a href="#" class="store-header-price-transparency-pricing-link">Everyday store prices</a>
                        <span class="middot m-y undefined">&nbsp;·&nbsp;</span>
                        <a href="#">More info</a>
                    </p>
                </div>
                <div class="search-bar primary-nav-search-bar" aria-hidden="false" style="flex-grow: 1;">
                    <form>
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                            <input type="search" class="tt-input search-field" placeholder="Search {{$storename }}..." style="position: relative; vertical-align: top;">
                        </span>
                        <button class="search-btn" type="submit" aria-label="start search" style="color: rgb(67, 176, 42);"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>



        </header>

        <div class="nav-tabs-outer">
            <div class="nav-tabs-inner-wrapper">

                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Department</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Coupons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get $50</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Items</a>
                    </li>
                </ul>

            </div>
        </div><!-- nav-tabs ends here -->
      



        @yield('content')
    </div>

    <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
