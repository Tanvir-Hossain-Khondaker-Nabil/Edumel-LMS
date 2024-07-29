@extends('frontend.layouts.master')
@section('content')
        <section class="page-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8">
                        <div class="title-block">
                            <h1>About Us</h1>
                            <ul class="header-bradcrumb justify-content-center">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li class="active" aria-current="page">
                                    About
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-3 section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('frontend/') }}/assets/images/img_9.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-content mt-5 mt-lg-0">
                            <div class="heading mb-50">
                                <span class="subheading">10 years Glory of success</span>
                                <h2 class="font-lg">
                                    Some reasons why Start Your Online Learning with Us
                                </h2>
                            </div>
                            <div class="about-features">
                                <div class="feature-item feature-style-left">
                                    <div class="feature-icon icon-bg-3 icon-radius">
                                        <i class="fa fa-video"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Online Classes</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Quidem veniam nulla inventore dolores fuga
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item feature-style-left">
                                    <div class="feature-icon icon-bg-2 icon-radius">
                                        <i class="fa-solid fa-kitchen-set"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Skilled Instructors</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Quidem veniam nulla inventore dolores fuga
                                        </p>
                                    </div>
                                </div>
                                <div class="feature-item feature-style-left">
                                    <div class="feature-icon icon-bg-1 icon-radius">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Get Certificate</h4>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Quidem veniam nulla inventore dolores fuga
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-process section-padding">
            <div class="container">
                <div class="row mb-70 justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-heading mb-4 mb-xl-0">
                            <span class="subheading">How to Start</span>
                            <h2 class="font-lg">4 steps start your journey with us</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <p>
                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                            venenatis vestibulum. Etiam porta sem malesuada magna mollis
                            euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                            Nullam quis risus eget urna mollis.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-7 pe-xl-5 col-lg-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="step-item ">
                                    <div class="step-number bg-1">01</div>
                                    <div class="step-text">
                                        <h5>Signup with all info</h5>
                                        <p>
                                            Lorem ipsum dolor seat ameat dui too consecteture elite
                                            adipaising.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="step-item">
                                    <div class="step-number bg-2">02</div>
                                    <div class="step-text">
                                        <h5>Take your Admission</h5>
                                        <p>
                                            Lorem ipsum dolor seat ameat dui too consecteture elite
                                            adipaising.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="step-item ">
                                    <div class="step-number bg-3">03</div>
                                    <div class="step-text">
                                        <h5>Learn from online </h5>
                                        <p>
                                            Lorem ipsum dolor seat ameat dui too consecteture elite
                                            adipaising.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="step-item ">
                                    <div class="step-number bg-1">04</div>
                                    <div class="step-text">
                                        <h5>Get certificate</h5>
                                        <p>
                                            Lorem ipsum dolor seat ameat dui too consecteture elite
                                            adipaising.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12">
                        <div class="video-section mt-5 mt-xl-0">
                            <div class="video-content">
                                <img src="{{ asset('frontend/') }}/assets/images/office01.jpg" alt="" class="img-fluid" />
                                <a href="#" class="video-icon video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
