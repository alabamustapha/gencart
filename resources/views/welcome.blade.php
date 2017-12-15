@extends('layouts.auth')     
    @section('content')

        <div class="content">
            <div class="container">                    
                <div class="signup-widget round shadow">
                    <div class="logo">
                        <img src="/images/cart-logo.png" width="57" alt="" srcset="">
                    </div>
                    <div class="sign-up">
                        <div class="gencart">
                            <div class="title"> The best way to shop for groceries</div>
                            <span>Delivered from the stores you love in one hour</span>
                            
                            <div class="row">
                                <div class="col-lg-10">
                            <form class="form-horizontal signup-form" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                
                                <div class="form-group" id="address-search">
                                    <input type="text" class="form-control form-control-md controls" id="pac-input" placeholder="Enter address to start" name="address" required autofocus>
                                </div>

                                <div class="signup-details" id="signup-fields">
                                        
                                    <div class="form-row">
                                        <div class="form-group col{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control form-control-md " placeholder="First name" name="first_name" required>
                                        </div>

                                        <div class="form-group col{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control form-control-md" placeholder="Last name" name="last_name" required>
                                        </div>
                                    </div>          
                                    
                                    <div class="form-row">
                                        <div class="form-group col{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" class="form-control form-control-md" placeholder="email" name="email" required>
                                        </div>
                                    </div>    
                                
                                    <div class="form-row">
                                        <div class="form-group col{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" class="form-control form-control-md" placeholder="Choose password" name="password" required>
                                        </div>
                                    </div>
                                
                                    <div class="form-row">
                                        <div class="form-group col{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                            <input type="password" class="form-control form-control-md" placeholder="Confirm password" name="confirm_password" required>
                                        </div>
                                    </div>
                                
                                    <button type="submit" style="cursor:pointer" class="btn btn-success btn-lg btn-block"> <i class="fa fa-envelop"> Signup</i></button>
                                
                                    <button style="cursor:pointer" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook"></i> Facebook</button>    
                                </div>

                                <button style="cursor:pointer" class="btn btn-success btn-lg btn-block" id="next">Continue <i class="fa fa-arrow-right"></i></button>
                            </form> 

                                
                                </div>
                            </div>
                            
                            
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
        
        @include('layouts.partials.links')

    </div> <!-- end content -->

    @endsection

    @section('scripts')
    
    <script>

        $(document).ready(function(){
          
          $('div#signup-fields').hide();    
          
          initAutocomplete();

            $('button#next').click(function(event){
                event.preventDefault();
                next();
            });

        });
      
      function initAutocomplete() {
        
        var options = {
            types: ['(cities)'],
            componentRestrictions: {country: 'sa'},
            strictBounds: true
        };

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        

        
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
        });

      }

      function next(){
          $("button#next").hide();
          $('div#signup-fields').show();
      }

      function back(){
            $("button#next").show();
            $('div#signup-fields').hide();
      }

      


      

    </script>
    <script src="{{ 'https://maps.googleapis.com/maps/api/js?key=' .env('GOOGLE_API_KEY') . '&libraries=places&callback=initAutocomplete' }}"
         async defer></script>
    @endsection

