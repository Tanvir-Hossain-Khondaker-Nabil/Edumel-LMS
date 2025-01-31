@extends('frontend.layouts.master')
@section('content')
<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper" />
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Login</h2>
                        <p class="woocommerce-register">
                            Don't have an account yet?
                            <a href="{{ route('singup') }}">Sign Up for Free</a>
                        </p>
                    </div>
                    <form class="woocommerce-form woocommerce-form-login login" method="post">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label htmlFor="username">
                                Username or email address&nbsp;
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" autoComplete="username" defaultValue="" placeholder="Username or Email" />
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label htmlFor="password">
                                Password&nbsp;<span class="required">*</span>
                            </label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autoComplete="current-password" placeholder="Password" />
                        </p>
                        <div class="d-flex align-items-center justify-content-between py-2">
                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" defaultValue="forever" />
                                    <span>Remember me</span>
                                </label>
                            </p>
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Forgot password?</a>
                            </p>
                        </div>
                        <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" defaultValue="a414dce984" />
                            <input type="hidden" name="_wp_http_referer" defaultValue="/my-account/" />
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">
                                Log in
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
