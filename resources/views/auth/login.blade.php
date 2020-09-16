@extends('layouts.front')

@section('content')
    <section class="bannerarea home-page-2">
        <div id="particles-js"></div>
        <!-- end particle effects  -->
        <div class="fluid-container">
            <div class="row bn-height align-items-center m-0 p-0">
                <div id="particles-js"></div>
                <div class="col-6 col-md-7 col-sm-12  p-0 m-0 hidden-sm">
                    <div class="login-bg">
                        <div class="banner-content fx">
                            <h2 class="animation text-white" data-animation="fadeInUp" data-animation-delay="0.6s"><strong>{{ config('global.county') }} Adverts</strong></h2>
                            <div class="animation" data-animation="fadeInDown" data-animation-delay="0.6s">
                                <h2 class="text-white"><span>Sign In To continue</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-5 col-sm-12  pl-0 bg-green">

                    <div class="login-form-container w-100 animation" data-animation="flipIn" data-animation-delay="0.4s">


                        <form action="{{ route('ad-auth') }}" method="post">
                            @if($errors->any())
                                <p class="alert alert-danger mt-3">{{$errors->first()}}</p>
                            @endif
                            @csrf
                            <h2 class="login100-form-title animation mb-2" data-animation="fadeInUp" data-animation-delay="0.6s">Sign In</h2>
                            <p class="animation mb-5 pb-3" data-animation="fadeInDown" data-animation-delay="0.6s">Key in your credentials bellow to continue</p>
                            <div class="wrap-input100 validate-input animation" data-animation="bounceInRight" data-animation-delay="0.6s" data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-input100 animation" data-animation="fadeInRight" data-animation-delay="0.8s">Email</span>
                                <input class="input100 animation" data-animation="bounceInRight" data-animation-delay="1.0s" type="text" name="user_name" value="advert-admin@gmail.com" placeholder="Email address..." required>
                                <span class="focus-input100 animation" data-animation="fadeInRight" data-animation-delay="1.2s"></span>
                            </div>

                            <div class="wrap-input100 validate-input animation" data-animation="bounceInRight" data-animation-delay="0.8s" data-validate = "Password is required">
                                <span class="label-input100 animation" data-animation="bounceInRight" data-animation-delay="1.4s">Password</span>
                                <input class="input100 animation" data-animation="bounceInRight" data-animation-delay="1.6s" type="password" name="password" value="1234.abc" required>
                                <span class="focus-input100"></span>
                            </div>
                            <button type="submit" class="btn btn-primary animation" data-animation="bounceInRight" data-animation-delay="1.8s">Sign In</button>
                            <p class="animation" data-animation="bounceInRight" data-animation-delay="2.0s"><a href="">Forgot Password?</a></p>
                        </form>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
