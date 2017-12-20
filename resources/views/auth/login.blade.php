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
                                <div class="form-group row">
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control form-control-lg input-zip" placeholder="email" name="email" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control form-control-lg input-zip" placeholder="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Continue</button>
                                    </div>
                                </div>

                            </form> 
                        
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
            </div>    
        </div>
    </div> <!-- end container -->  
    
    @include('layouts.partials.links')
</div> <!-- end content -->
@endsection
