<header class="header" style="background: #FFFFFF;">

    <div class="header-middle sticky-header d-lg-block d-none" data-sticky-options="{'mobile': true}">
        <div class="container-fluid px-5">
            <div class="header-left col-lg-6 w-auto pl-0">
                <div class="input-group box-shadow-4" style="padding: 1px; border: 1px solid #F3F1ED; border-radius: 24px;">
                    <div class="input-group-prepend align-items-center ml-4">
                      <span style="font-size: 20px; color: #6B6565;"><i class="icon-magnifier"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="" aria-describedby="basic-addon1" style="border: none; border-radius: 24px;">
                  </div>

            </div>
            <!-- End .header-left -->

            <div class="header-right w-lg-max ml-0 justify-content-end">

                <a href="#" class="header-icon d-inline-block" title="Login"><img src="{{ asset('assets/img/icons/options.png') }}" width="30px" /></a>

                <a href="#" class="header-icon d-inline-block pt-2" title="Wishlist" style="color: #6B6565;"><i
                        class="sicon-globe"></i></a>
                @auth
                <a href="{{ route('login') }}" class="btn btn-outline btn-ellipse  btn-icon-right  btn-md pl-5 pb-0"
                    style="
                        color: #6B6565;
                        border-color: #6B6565;
                        background: #ffffff;
                        padding-right: 3px !important;
                        padding-top: 2px !important;">
                    <span style="vertical-align: super;">My account</span>
                    <i class="far fa-user-circle" style="font-size: 26px;"></i>
                </a>

                @else
                <a href="{{ route('login') }}" class="btn btn-outline btn-ellipse  btn-icon-right  btn-md px-5 py-2" style="color: #FFF; border-color: #FFF;">
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
    <!-- End .header-bottom -->
</header>
