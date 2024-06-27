<header class="header">

    <div class="header-top d-flex align-items-center w-100">

        <div class="header-left">
            <div class="social-icons">
                <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="px-2"><i class="fab fa-facebook-f"></i></a>
                <a href="http://www.instagram.com/" target="_blank" title="Instagram" class="px-2"><i class="fab fa-instagram"></i></a>
                <a href="http://www.google.com/" target="_blank" title="Google Plus" class="px-2"><i class="fab fa-whatsapp"></i></a>
                <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="px-2"><i class="fab fa-twitter"></i></a>
                <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="px-2"><i class="far fa-envelope"></i></a>
            </div>
        </div>

    </div>
    <!-- End .header-top -->

    <div class="header-middle sticky-header d-lg-block d-none" data-sticky-options="{'mobile': true}">
        <div class="container-fluid px-5">
            <div class="header-left col-lg-6 w-auto pl-0">
                <button class="mobile-menu-toggler mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="header-logo-wrapper">
                    <a href="#" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" width="200" alt="Tournament Manager">
                    </a>
                </div>
                <div class="d-flex flex-row align-items-center pl-5" >
                    <img src="{{ asset('assets/img/brands/adidas.png') }}" width="58" height="40" alt="Adidas" class="ml-4"/>
                    <img src="{{ asset('assets/img/brands/fitline.png') }}" width="80" height="80" alt="FitLine" class="ml-4"/>
                    <img src="{{ asset('assets/img/brands/teamsports.png') }}" width="240" height="30" alt="11TeamSports" class="ml-4"/>
                </div>

            </div>
            <!-- End .header-left -->

            <div class="header-right w-lg-max ml-0 justify-content-end">

                <a href="#" class="header-icon d-inline-block pt-2" title="Search"><i
                        class="sicon-magnifier"></i></a>

                <a href="#" class="header-icon d-inline-block pt-2" title="Global"><i
                        class="sicon-globe"></i></a>
                @auth
                <a href="{{ route('user-profile') }}" class="btn btn-outline btn-ellipse btn-icon-right btn-md pl-5 pb-0 account-btn">
                    <span style="vertical-align: super;">My account</span>
                    <i class="far fa-user-circle" style="font-size: 26px;"></i>
                </a>
                <a href="{{ route('logout') }}" class="btn btn-outline btn-ellipse btn-icon-right btn-md px-5 py-2 login-btn">
                    Logout
                    <i class="far fa-sign-out"></i>
                </a>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline btn-ellipse btn-icon-right btn-md px-5 py-2 login-btn">
                    Log in
                    <i class="sicon-arrow-right"></i>
                </a>
                @endauth


            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->

    <div class="header-bottom" data-sticky-options="{'mobile': false}">
        <div class="container-fluid px-5">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Tournament Manager">
                </a>
            </div>
            <div class="header-center">
                <nav class="main-nav w-100">
                    <ul class="menu">
                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'tournaments' ? 'active' : '' }}">
                            <a href="{{ route('tournaments') }}">Tournaments</a>
                        </li>
                        <li>
                            <a href="{{ route('friendly_games') }}">Friendly Games</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}">
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li><a href="#">Shop</a></li>
                        <li>
                            <a href="{{ route('team_digital') }}">Team Digital</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                        @auth
                        <li class="float-right mr-3 pt-3">
                            <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 header-btn-2">
                            Organiser profile
                        </a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-search header-icon header-search-inline header-search-category w-lg-max pt-2">
                    <a href="#" class="search-toggle" role="button"><i class="sicon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="qqq" placeholder="Search..." required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="12">- Women</option>
                                    <option value="13">- Men</option>
                                    <option value="66">- Jewellery</option>
                                    <option value="67">- Kids Fashion</option>
                                    <option value="5">Electronics</option>
                                    <option value="21">- Smart TVs</option>
                                    <option value="22">- Cameras</option>
                                    <option value="63">- Games</option>
                                    <option value="7">Home &amp; Garden</option>
                                    <option value="11">Motors</option>
                                    <option value="31">- Cars and Trucks</option>
                                    <option value="32">- Motorcycles &amp; Powersports</option>
                                    <option value="33">- Parts &amp; Accessories</option>
                                    <option value="34">- Boats</option>
                                    <option value="57">- Auto Tools &amp; Supplies</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->
                            <button class="btn p-0 icon-search-3" type="submit"></button>
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>

                <a href="wishlist.html" class="header-icon d-inline-block pt-2" title="Wishlist"><i
                        class="sicon-globe"></i></a>

                <a href="#" class="btn btn-outline btn-ellipse  btn-icon-right  btn-md px-5 py-2" style="color: #FFF; border-color: #FFF;">
                    Log in
                    <i class="sicon-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-bottom -->
</header>
