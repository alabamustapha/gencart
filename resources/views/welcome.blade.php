@extends('layouts.auth')
        

    @section('content')

        <div class="content">
            <div class="container">                    
                <div class="signup-widget round shadow">
                    <div class="logo">
                        <img src="/images/logo-carrot-icon.png" alt="" srcset="">
                    </div>
                    <div class="sign-up">
                        <div class="gencart">
                            <div class="title"> The best way to shop for groceries</div>
                            <span>Delivered from the stores you love in one hour</span>
                            
                            <form class="signup-form" method="">
                                <div class="form-group row">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control form-control-lg input-zip" placeholder="Enter addressto start">
                                    </div>
                                    <div class="col-lg-10">
                                        <button type="submit" style="cursor:pointer" class="btn btn-success btn-lg btn-block">Continue</button>
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
            
            @include('layouts.partials.links')

        </div> <!-- end content -->

    @endsection

