@extends('layouts.app')

@section('content')

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
                            <div class="title"> Get your groceries delivered from local stores</div>
        

                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                    <div class="form-group row">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control form-control-lg input-zip" placeholder="username">
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control form-control-lg input-zip" placeholder="password">
                                        </div>
                                        <input type="hidden" name="remember" value="checked">
                                        <div class="col-lg-10">
                                            <button type="button" class="btn btn-success btn-lg btn-block">Continue</button>
                                        </div>
                                    </div>
                                </form> 
                                
                                <div class="signup-or-login">
                                    <ul>
                                        <li>Don't have an account? <a href="#">Signup</a></li>
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
            </div>
        </div>
@endsection
