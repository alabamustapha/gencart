@extends('layouts.store')

@section('content')

<div class="cartModal" style="">
    @include('layouts.partials.cart_modal')
</div> <!-- cart modal -->

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


    <section class="store-new-arrival">
        <div class="container">
            <div class="jumbotron">
                <p class="featured-products">New Arrivals</p>
                
                    <div class="owl-carousel owl-theme">

                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">this is a product description. And should be taken just as so</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card" style="width: 12rem;">
                                <div class="card-img-top">
                                    <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                </div>
                                <div class="card-body">

                                    <div class="item-add-btn">
                                        <div class="favourite float-left">
                                            <i class="fa fa-heart-o fa-lg"></i>
                                        </div>
                                        <div class="add-btn float-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                        </div>
                                    </div>

                                    <h4 class="card-title">$1.54</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span class="item-size muted">120 oz</span>

                                </div>
                            </div>
                        </div>

                    </div>
                           
            </div>
        </div>
    </section>
    <!-- end new arrivals -->

    <section class="store-sales">
        <div class="container">
            <div class="jumbotron">
                <p class="featured-products">Sales</p>
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
        </div>
    </section>
    <!-- end new sales -->


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


                <div class="department-cards">

                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="/store/rainbow-grocery/departments/pantry">Pantry</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Toiletries</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Beverages</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Deli</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Frozen</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Meat & Seefood</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Diary & Egg</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- store department ends -->

</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 200) {                    
                    $("#navbar").removeClass('bg-light').css('backgroundColor', '#fff');
                    $("#navbar-search").removeClass("hidden");
                    $(".navbar-nav .nav-link").css('color', 'rgb(67, 176, 42)');
                    $('#nav-tabs-outer').addClass('fixed').css('top', '56px');            
                }else {
                    $('#navbar').addClass('bg-light');
                    $("#navbar-search").addClass("hidden");
                    $(".navbar-nav .nav-link").css('color', 'rgb(255, 255, 255)');
                    $("#nav-tabs-outer").removeClass('fixed').css('top', '0');
                }
            });

            

            $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
            $(".owl-prev").css({
                'z-index': '100',
                'border': '0px',
                'width': '48px',
                'height': '48px',
                'padding': '15px 7px',
                'border-radius': '50%',
                'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
                'transition': 'opacity 200ms linear',
                'text-align': 'center',
                'line-height': '1',
                'background-color': 'rgb(60, 158, 38)',
                'color': 'rgb(255, 255, 255)',
                'position': 'absolute',
                'top': '83px',
                'display': 'block',
                'left': '8px',
                'right': '8px',
                'opacity': '0',
            });
            $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
            $(".owl-next").css({
                'z-index': '100',
                'border': '0px',
                'width': '48px',
                'height': '48px',
                'padding': '15px 7px',
                'border-radius': '50%',
                'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
                'transition': 'opacity 200ms linear',
                'text-align': 'center',
                'line-height': '1',
                'background-color': 'rgb(67, 176, 42)',
                'color': 'rgb(255, 255, 255)',
                'position': 'absolute',
                'top': '83px',
                'display': 'block',
                'right': '8px',
                'opacity': '0'
            });


            

        });
    </script>
@endsection