@extends('layouts.store')

@section('content')

<div class="cartModal">
    @include('layouts.partials.cart_modal')
</div> <!-- cart modal -->

<div class="store-dropdown-modal">
    @include('layouts.partials.store-dropdown-modal')
</div>


<div class="content">



    <section class="store-department">
        <div class="container">
            <div class="jumbotron">
                <p class="dept-title">Browse Departments</p>


                <div class="department-cards">
                   @foreach($departments as $department)                         
                    <div class="card" style="width: 176px; height:176px;">
                        <img class="card-img" src="{{ asset('images/pantry.jpg') }}" alt="Card image">                    
                        <div class="card-img-overlay" style="padding-top: 80%">
                            <h6 class="card-title">{{ $department->name }}</h6>
                            <!-- <a href="#" class="text-muted"><h4 class="card-title">{{ $department->name }}</h4></a> -->
                            
                        </div>
                    </div>

                    <!-- <div class="card bg-dark text-white">
                        <img class="card-img" src="..." alt="Card image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $department->name }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div> -->
                    @endforeach                        
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
                    $(".navbar-nav .nav-link:not(#myTab .nav-link)").css('color', 'rgb(67, 176, 42)');
                    $('#nav-tabs-outer').addClass('fixed').css('top', '65px');            
                }else {
                    $('#navbar').addClass('bg-light');
                    $("#navbar-search").addClass("hidden");
                    $(".navbar-nav .nav-link:not(#myTab .nav-link)").css('color', 'rgb(255, 255, 255)');
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
                'top': '110px',
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
                'top': '110px',
                'display': 'block',
                'right': '8px',
                'opacity': '0'
            });


            // $("#store-modal").click(function(){
            //     $(this).find(".fa-chevron-down").css('transform', 'rotateX(150deg)');
            // }, function() {
            //     $(this).find(".fa-chevron-down").css('transform', 'rotateX(150deg)');
            // });


            

        });
    </script>
@endsection