@extends('frontend.layouts.master')
@section('content')
<div class="page-builder-template">
    <div class="elementor elementor-20">

        @include('frontend.includes.Slider')
        @include('frontend.includes.Counter')
        @include('frontend.includes.Info')

        <section>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-4 pt-5 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2022/11/New-Black-Yellow-and-White-Abstract-Photocentric-Modern-YouTube-Thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">
                                                        Affiliate Marketing
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Tempor aliquet eget sit amet tellus cras adipiscing
                                                enim. Feugiat in ante metus dictum a...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">
                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-5 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2022/11/New-Blue-and-White-Bold-Tech-Youtube-Thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">
                                                        Artificial Intelligence
                                                    </a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Eiusmod aliquet eget sit amet tellus cras adipiscing
                                                enim. Feugiat in ante metus dictum a...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">
                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-5 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2022/11/New-Blue-and-Yellow-Professional-Business-YouTube-Thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">Sfrefck Market</a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Labore aliquet eget sit amet tellus cras adipiscing
                                                enim. Feugiat in ante metus dictum a...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">
                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 pt-2 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2022/11/New-blue-modern-website-programming-online-tutorials-youtube-thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">Web Programming</a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Incidid aliquet eget sit amet tellus cras adipiscing
                                                enim. Feugiat in ante metus dictum a...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">
                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-5 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2022/11/New-Green-Modern-Business-YouTube-Thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">Building Business</a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Dolore aliquet eget sit amet tellus cras adipiscing
                                                enim. Feugiat in ante metus dictum at...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">
                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-5 pt-lg-0">
                        <div class="px-4 p-lg-0">
                            <img width="1920" height="1080" src="https://lizza.wpengine.com/lms/wp-content/uploads/sites/12/2017/11/New-Green-Modern-Study-with-Me-Youtube-Thumbnail-1.jpg" alt="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-clock"></i> 17 Nov, 2022
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-book"></i> 0 Curriculum
                                            </p>
                                        </div>
                                        <div class="col-sm-4 col-6">
                                            <p class="dtlms-courselist">
                                                <i class="fas fa-user"></i> 5 Students
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dtlms-courselist">
                                                <h5>
                                                    <a href="{{ route('single_course') }}">Logical Maths</a>
                                                </h5>
                                            </div>
                                            <div class="dtlms-courselist-description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Sed elementum luctus erat ac...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="row mt-4">
                                        <div class="col-4 d-flex align-content-center">
                                            <div class="dtlms-courselist-price">
                                                <p>€55</p>
                                                <del>€62</del>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex justify-content-end">

                                            <a href="{{ route('cart') }}">
                                                <button class="add-to-cart">Add To Cart</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
@endsection
