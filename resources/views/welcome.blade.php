<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GenCart | Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Bootstrap maxcdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
        <!-- Custom stylesheet - for your changes -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="content">
            <div class="jumbotron jumbotron-fluid">
                <a href="#" class="btn btn-success float-right">Login</a>

                <div class="container">                    
                    <div class="signup-widget round shadow">
                        <div class="logo">
                            <h1>LOGO</h1>
                        </div>
                        <div class="sign-up">
                            <div class="gencart">
                               <div class="title">  The best way to shop for groceries</div>
                               <span>Delivered from the stores you love in one hour</span>
                                
                                <form class="signup-form" method="">
                                    <div class="form-group row">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control form-control-lg input-zip" placeholder="Enter Zip Code">
                                        </div>
                                        <div class="col-lg-10">
                                            <button type="button" class="btn btn-success btn-lg btn-block">Continue</button>
                                        </div>
                                    </div>
                                </form> 
                                
                                <div class="signup-or-login">
                                    <ul>
                                        <li>already have an account? <a href="{{ route('login') }}">Log in</a></li>
                                    </ul>
                                </div>



                                <div class="free-message">
                                    <i class="fa fa-gift"></i>
                                     First delivery is <span class="bold">free</span> over $10 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- end container -->

                
                     
                
                <div class="links">
                    <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>

            <!-- grid section -->

            <!-- <section class=" section how-it-works">
                <div class="section-wrap">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="img">
                                    <img src="{{ asset('images/product.jpg')}}" alt="">
                                </div>

                                <h3>Products You Love</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                            </div>

                            <div class="col-lg-4">
                                <div class="img">
                                    <img src="{{ asset('images/sameday.jpg')}}" alt="">
                                </div>

                                <h3>Products You Love</h3>
                                <p >
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                            </div>

                            <div class="col-lg-4">
                                <div class="img">
                                    <img src="{{ asset('images/time.jpg')}}" alt="">
                                </div>

                                <h3>Products You Love</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </section> -->

            <!-- <section class="deals">
                <div class="section-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <img src="{{ asset('images/coupon.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="col-lg-4 mgt-60">
                                <h3>Deals that delights </h3>

                                <p>Saving money on Instacart is easy. Find exclusive coupons on hundreds of items</p>

                                <p>
                                    <button type="submit" class="btn btn-success float-left cta">Start Saving</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <section class="section browse-product">

                <div class="section-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3>Deals that delights </h3>
                                <p>Saving money on Instacart is easy. Find exclusive coupons on hundreds of items</p>

                                 <p>
                                    <button type="submit" class="btn btn-success float-left cta">Start Saving</button>
                                </p>
                            </div>
                            <div class="col-lg-8">    
                                <img class="section-img" src="{{ asset('images/mom.jpg')}}" alt="" srcset="">  
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->




        </div> <!-- end content -->




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
