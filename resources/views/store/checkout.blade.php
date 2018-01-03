<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GenCart - Checkout') }}</title>

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
            
        </header> <!-- store list header ends -->

        <div class="container">
            <div class="checkout-header">
                <div class="checkout-progress">
                    <ul>
                        <li class="active">Address</li>
                        <li class="">Schedule</li>
                        <li class="">Payment</li>
                        <li class="">Review</li>
                    </ul>
                </div>
            </div>
        </div>

        

        <div class="container">
            <div class="checkout-container">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post">

                            <div class="form-group">
                                <label for="street-address">Street Address <span class="text-danger">*</span></label>
                                <input type="text" name="street-address" class="form-control form-control-lg" id="street-address" placeholder="Street Address">
                            </div>

                        
                            <div class="form-group">
                                <label for="apt-no">Apt Number (<small>Optional</small>)</label>
                                <input type="text" name="apt-no" class="form-control form-control-lg" id="apt-no" placeholder="Apt #">
                            </div>

                            <div class="form-group">
                                <label for="business-name">Business Name (<small>Optional</small>)</label>
                                <input type="text" name="business-name" class="form-control form-control-lg" id="business-name" placeholder="Business name">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input type="text" name="zipcode" class="form-control form-control-lg" placeholder="Zipcode">
                                </div>
                                <div class="col">
                                    <!-- <input type="text" class="form-control-plaintext" value="San Francisco, CA"> -->
                                    <p>San Francisco, CA</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="business-name">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="business-name" class="form-control form-control-lg" id="business-name" placeholder="Business name">
                        </div>
                        <!-- <small>we will contact using this number when we arrive</small> -->
                        <div class="form-group">
                                <label for="instructions">Instructions for delivery (<small>optional</small>)</label>
                                <textarea class="form-control" id="" rows="4"></textarea>
                            </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success float-right">Continue</button>
                    </div>
                </div>
            </div>
        </div>





        
        


        <footer class="store-lists-footer">
            <div class="list-group">
                <li class="list-group-item text-center">
                    <p class="disclaimer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente vel nulla inventore illum minima exercitationem! Expedita, quod maiores facilis tempora nisi asperiores libero! Provident, neque ipsum veniam labore ratione sint? </p>
                </li>
            </div>
        </footer> <!-- store list footer ends -->

    </div> <!-- app ends here -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/cart.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
