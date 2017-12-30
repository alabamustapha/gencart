<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
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
                            <div class="list-group">
                                <li class="list-group-item text-center">
                                    <img src="{{ asset('/images/home-logo.png')}}" width="57" alt="gencart logo" srcset="">
                                </li>
                            </div>
                            <div class="container-fluid">
                                <ul class="list-group">
                                    <li class="list-group-item text-center">
                                        <h3><strong>Available stores around you</strong></h3>
                                    </li>

                                    <li class="list-group-item">
                                        Filter by:
                                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: inline-flex;">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                                            </li>
                                            @if(auth()->user()->zipcode)
                                            <li class="nav-item">
                                                <a class="nav-link" id="zipcode-tab" data-toggle="tab" href="#zipcode" role="tab" aria-controls="zipcode" aria-selected="true">{{ 'In ' . auth()->user()->zipcode }}</a>
                                            </li>
                                            @endif
                                            @foreach($categories as $category)
                                            <li class="nav-item">
                                                <a class="nav-link" id="{{ $category->slug }}-tab" data-toggle="tab" href="#{{ $category->slug }}" role="tab" aria-controls="{{ $category->slug }}" aria-selected="false">{{ $category->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="list-group-item" style="background: #f7f7f7;">Recommended stores</li>
                                </ul>
                            </div>
                        </header> <!-- store list header ends -->

        
                        <div class="container">
                            <div class="tab-content" id="myTabContent">
                    
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    @if(count($stores))
                                    <div class="row">
                                        @foreach($stores as $store)
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
                                                        <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                                            @foreach($store->categories as $store_category) 
                                                                @if($loop->last) 
                                                                    {{ $store_category->name }} 
                                                                @else 
                                                                    {{ $store_category->name }} &middot;
                                                                @endif 
                                                            @endforeach</small>
                                                        </p>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                            <h1>No Stores Currently, please check back later</h1>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="tab-pane fade show" id="zipcode" role="tabpanel" aria-labelledby="zipcode-tab">
                                    @if(count($stores = $stores->where('zipcode', auth()->user()->zipcode)))
                                    <div class="row">
                                        @foreach($stores as $store)
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
                                                    <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                                        @foreach($store->categories as $store_category) 
                                                            @if($loop->last) 
                                                                {{ $store_category->name }} 
                                                            @else 
                                                                {{ $store_category->name }} &middot;
                                                            @endif 
                                                        @endforeach</small>
                                                    </p>
                                                    </div>
                                                </div>              
                                                
                                            </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                            <h1>No Stores Currently in {{ auth()->user()->zipcode }}, please check back later</h1>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                @foreach($categories as $category)
                                <div class="tab-pane fade" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="{{ $category->slug }}-tab">
                                    
                                    @foreach($stores as $store)
                                    
                                    @if($store->hasCategory($category->id))
                                        <div class="card-columns">
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
                                                    <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                                        @foreach($store->categories as $store_category) 
                                                            @if($loop->last) 
                                                                {{ $store_category->name }} 
                                                            @else 
                                                                {{ $store_category->name }} &middot;
                                                            @endif 
                                                        @endforeach</small>
                                                    </p>    
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                    
                                </div>
                                @endforeach

                            </div> <!-- tab ends here -->
                        </div> <!-- container ends here -->
     
                </div> <!-- dropdown menu ends -->

            </li>

        </ul>

        <div id="navbar-search" class="search-bar primary-nav-search-bar hidden" aria-hidden="false" style="flex-grow: 1;">
            <form>
                <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                    <input type="search" class="tt-input search-field" placeholder="Search {{ isset($store) ? $store->name : "" }}..." style="position: relative; vertical-align: top;">
                </span>
                <button class="search-btn" type="submit" aria-label="start search" style="color: rgb(67, 176, 42);"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ auth()->user()->zipcode }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account<span class="sr-only">(Account)</span>
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hi, {{ auth()->user()->name }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i> Your Account</a>
                        @if(auth()->user()->role !== 'customer' )
                            <a class="dropdown-item" href="{{ route(auth()->user()->role . '_dashboard') }}"><i class="fa fa-user-circle"></i> Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="#">Your Order</a>
                        <a class="dropdown-item" href="#">Add Promo Code</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-cart-plus"></i> Group Carts</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-gift"></i> Buy Gift Cards</a>
                        <a class="dropdown-item" href="#">GenCart Express</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-sliders"></i> How GenCart Works</a>
                        <a class="dropdown-item" href="#">Lists and Recipes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>&nbsp;Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form> 
                    </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>

        </ul>
        
        <form class="form-inline my-2 my-lg-0">        
            <!-- button to trigger cart modal -->
            <button type="button" class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalSidePaneRight">
                <i class="fa fa-shopping-cart fa-lg"></i> Cart
                    <span class="cart-qty-badge">1</span>                    
                    <span class="sr-only">cart items</span>
            </button>

        </form>
    </div>
</nav> 