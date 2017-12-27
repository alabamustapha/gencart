@extends('layouts.store')

@section('content')

<div class="cartModal" style="">
    <!-- Modal -->
    <div class="modal fade modal-right-pane" id="modalSidePaneRight" tabindex="-1" role="dialog" aria-labelledby="sidePaneRightModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
    
    
    
        <div class="modal-content rounded-0">
    
          <div class="modal-header">
            <h5 class="modal-title" id="sidePaneRightModal"> My Cart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    
            <div class="modal-body">
    
                <div class="text-center">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <p><strong>Your Cart is Empty</strong></p>
                </div>
    
                <div class="box"> 

                    <!-- <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="">product name</a>
                                </th>
                                <td>
                                    <form action="">
                                        <input type="number" name="qty" id="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.98</td>
                                <td>0.00</td>
                                <td>$1.90</td>
                            </tr>
                        </tbody>
                    </table> -->              

                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit price</th>
                                <th scope="col">Discount</th>
                                <th colspan="2">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr scope="row">
                                <td>
                                    <a href="">Urban Remedy</a>
                                </td>
    
                                <td>
                                    <form id="" method="POST" action="">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="number" min="1" name="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.9</td>
                                <td>$0.00</td>
                                <td>$1.9</td>
                                <td>
                                    <button title="Update Item Quantity" class="btn btn-default">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button title="Remove Item from Cart" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        
                                    </button>
    
    
                                    <form id="" action="" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="">
                                        <input type="hidden" name="_method" value="DELETE">
                                        
                                    </form> 
                                </td>
                            </tr>
                            <tr scope="row">
                                <td>
                                    <a href="">Urban Remedy</a>
                                </td>
    
                                <td>
                                    <form id="" method="POST" action="">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="number" min="1" name="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.9</td>
                                <td>$0.00</td>
                                <td>$1.9</td>
                                <td>
                                    <button title="Update Item Quantity" class="btn btn-default">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button title="Remove Item from Cart" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        
                                    </button>
    
    
                                    <form id="" action="" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="">
                                        <input type="hidden" name="_method" value="DELETE">
                                        
                                    </form> 
                                </td>
                            </tr>
                                                       
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2">$1000.00</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- /.table-responsive -->
    
                </div>        
    
            </div>
    
            <div class="modal-footer" >
                <button type="button" class="btn btn-default btn-block" style="display:flex; justify-content: space-between;">
                    Checkout
                    <h1><span class="badge badge-secondary">$45</span></h1>
                </button>
            </div>
    
    
        </div>
    
    
    
      </div> <!-- modal dialog -->
    </div> <!-- modal fade -->
    
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
                    $('#nav-tabs-outer').addClass('fixed').css('top', '56px');            
                }else {
                    $('#navbar').addClass('bg-light');
                    $("#navbar-search").addClass("hidden");
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
                'opacity': '1',
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
                'opacity': '1'
            });


            

        });
    </script>
@endsection