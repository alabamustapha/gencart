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
                <div class="title"> Get your groceries delivered from local stores</div>

                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">                               

                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="text" class="form-control form-control-md input-zip" placeholder="username">
                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <input type="password" class="form-control form-control-md input-zip" placeholder="password">
                                </div>

                                <input type="hidden" name="remember" value="checked">

                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <button type="button" class="btn btn-success btn-lg btn-block">Continue</button>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Continue</button>
                                    <button type="button" class="btn btn-danger btn-lg btn-block">Continue</button>
                                </div>
                            </div>
                        </form> 

                    </div>
                </div>
                       
                <div class="signup-or-login">
                    <ul>
                        <li>Don't have an account? <a href="{{ route('home')}}">Signup</a></li>
                    </ul>
                </div>



                    <div class="free-message">
                        <i class="ic-icon ic-icon-gift"></i>
                        <span class="bold">FREE</span>
                            delivery on your first order*
                    </div>
                </div>
                
            </div>
        </div>
    </div> <!-- end container -->  
    
    @include('layouts.partials.links')
</div> <!-- end content -->
@endsection
