@extends('frontend.layouts.master')
@section('content')
<section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-7">
                <div class="signup-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Sign Up</h2>
                        <p class="woocommerce-register">
                            Already have an account?
                            <a href="{{ route('login') }}">Log in</a>
                        </p>
                    </div>
                    <form method="post" class="woocommerce-form woocommerce-form-register register">
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        First Name&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="first-name" placeholder="First Name" />
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        Last Name&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="last-name" placeholder="Last Name" />
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        User Name&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="user-name" defaultValue="" placeholder="Username" />
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        Email&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="email" defaultValue="" placeholder="Your Email" />
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        Password&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-control" name="password" defaultValue="" placeholder="Password" />
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>
                                        Re-Enter Password&nbsp;
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" class="form-control" name="re-password" defaultValue="" placeholder="Re-Enter Password" />
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="policy" type="checkbox" id="policy" defaultValue="forever" />
                                            <span>Accept the Terms and Privacy Policy</span>
                                        </label>
                                    </p>
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="#">Forgot password?</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="woocommerce-FormRow form-row">
                            <button type="submit" class="woocommerce-button button" name="register" value="Register">
                                Register
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
