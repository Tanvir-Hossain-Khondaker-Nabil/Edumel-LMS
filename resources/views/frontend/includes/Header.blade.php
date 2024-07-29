<header class="header-style-1">
    <div class="header-topbar topbar-style-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 col-md-12">
                    <div class="header-contact text-center text-lg-start d-none d-sm-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-phone-alt"></i></span><a href="tel: +(354) 6800 37849 "> +(354) 6800 37849 </a>
                            </li>

                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-envelope"></i></span><a href="malito:hello@edumel.com"> hello@edumel.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="d-sm-flex justify-content-center justify-content-lg-end">
                        <div class="header-socials text-center text-lg-end">
                            <ul class="list-inline">

                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>


                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>


                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>


                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>



                            </ul>
                        </div>

                        <div class="header-btn text-center text-lg-end">
                            <a href="{{ route('login') }}"> <i class="fa fa-user-alt"></i> লগ ইন / সাইন আপ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="https://bestwpware.com/themes-wp/edumel/"><img src="https://bestwpware.com/themes-wp/edumel/wp-content/themes/edumel/assets/images/logo.png" alt="Edumel – Education LMS WordPress Theme"></a>
                </div>

                <div id="nav-icon" class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div class="header-search-bar d-none d-xl-block ms-4">
                    <form action="https://bestwpware.com/themes-wp/edumel/">
                        <input type="text" class="form-control" name="s" id="s" placeholder="পছন্দের কোর্সগুলো খুজুঁন" />
                        <button type="submit" class="search-submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <nav id="navbarMenu" class="site-navbar ms-auto d-lg-block d-none">
                    <div class="z-3 x d-lg-none d-flex" id="close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <ul id="menu-main-menu" class=" primary-menu ">
                        <li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-20 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-292">
                            <a href="{{ route('home') }}" aria-current="page" onclick="return true">হোম</a>
                            
                        </li>
                        <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340"><a href="https://bestwpware.com/themes-wp/edumel/about/" onclick="return true">বিস্তারিত</a></li>
                        <li id="menu-item-871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-871">
                            <a href="{{ route('about') }}" onclick="return true">বিস্তারিত </a>
                            <!-- <span class="menu-trigger"><i class="fa-solid fa-chevron-down"></i></span> -->
                        </li>
                        <li id="menu-item-360" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-360">
                            <a href="{{ route('instructor') }}" onclick="return true">ইন্সট্রাক্টর </a>
                            <!-- <span class="menu-trigger"><i class="fa-solid fa-chevron-down"></i></span> -->
                        </li>
                        <li id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293">
                            <a href="{{ route('blog') }}" onclick="return true">ব্লগ </a>
                        </li>
                        <li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1012">
                            <a href="{{ route('contact') }}" onclick="return true">যোগাযোগ </a></li>
                    </ul> <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>
            </div>
        </div>
    </div>
</header>
