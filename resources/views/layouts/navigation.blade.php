<header class="site-header site-header--menu-right bg-default position-fixed py-7 py-xs-0 site-header--absolute">
    <div class="container-fluid-fluid px-10">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
            <!-- Brand Logo-->
            <a href="{{ route('home') }}">
                <div class="brand-logo font-weight-bold">
                    {{-- <h4 class="m-3"><span class="text-success">Sucofindo</span></h4> --}}
                    <h4 class="m-3">
                        <img src="/image/sucofindo.png" alt="Sucofindo Logo" height="70">
                    </h4>
                </div>
            </a>
            <div class="collapse navbar-collapse" id="mobile-menu">

            </div>

            <div class="header-btn-devider ml-auto ml-lg-5 pl-2 d-xs-flex align-items-center">
                <div class="dropdown show-gr-dropdown py-5">
                    <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="circle-40">
                            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ? auth()->user()->name : 'User Name' }}&background=0D8ABC&color=fff"
                                alt="Avatar logo" class="rounded" height="40">
                        </div>
                        <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                    </a>
                    <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default"
                        aria-labelledby="dropdownMenuLink">

                        @if (auth()->user()->role == 'admin')
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="{{ route('change-password.edit', auth()->user()->id) }}">Ubah Password</a>
                        @else
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="{{ route('profile.index') }}">Profil</a>
                        @endif

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();">Keluar</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Hamburger-->
            {{-- <button class="navbar-toggler btn-close-off-canvas d-none hamburger-icon border-0" type="button"
                data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <i class="icon icon-simple-remove icon-close"></i> -->
                <span class="hamburger hamburger--squeeze js-hamburger">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
            </button> --}}
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
