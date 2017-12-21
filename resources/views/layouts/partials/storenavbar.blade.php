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


                    <!-- <div class="store_overlay"></div> -->





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




                    
                </div> <!-- dropdown menu ends -->
            </li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-map-marker" aria-hidden="true"></i> 94578</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account<span class="sr-only">(Account)</span>
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hi, {{ auth()->user()->first_name }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Your Account</a>
                        <a class="dropdown-item" href="#">Your Order</a>
                        <a class="dropdown-item" href="#">Add Promo Code</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Group Carts</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-gift"></i> Buy Gift Cards</a>
                        <a class="dropdown-item" href="#">GenCart Express</a>
                        <a class="dropdown-item" href="#">How GenCart Works</a>
                        <a class="dropdown-item" href="#">Lists and Recipes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
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
            <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-shopping-cart"></i>  Cart</button>
        </form>
    </div>
</nav> 