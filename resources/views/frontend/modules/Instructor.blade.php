@extends('frontend.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
                <div class="title-block">
                    <h1>Instructors</h1>
                    <ul class="header-bradcrumb justify-content-center">
                        <li>
                            <Link to="/">Home</Link>
                        </li>
                        <li class="active" aria-current="page">
                            Instructors
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-instructors section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-4.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>SEO Expert</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt" ></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i> 2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-1.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter" ></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>CEO, Developer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-2.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f" ></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Web eveloper</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-3.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Marketer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-1.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter" ></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>CEO, Developer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-4.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>SEO Expert</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i> 2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-3.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Marketer</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-item mb-5">
                    <div class="team-img">
                        <img src="{{ asset('frontend/') }}/assets/images/team-2.jpg" alt="" class="img-fluid" />
                        <ul class="team-socials list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h4>Harish Ham</h4>
                            <p>Web eveloper</p>
                        </div>
                        <div class="course-meta">
                            <span class="duration">
                                <i class="far fa-user-alt"></i>
                                20 Students
                            </span>
                            <span class="lessons">
                                <i class="far fa-play-circle me-2"></i>2 Course
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
