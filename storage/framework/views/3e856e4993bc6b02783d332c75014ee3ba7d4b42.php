<header class="site-header site-header--menu-right bg-default position-fixed py-7 py-xs-0 site-header--absolute">
    <div class="container-fluid-fluid px-10">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
            <!-- Brand Logo-->
            <a href="<?php echo e(route('home')); ?>">
                <div class="brand-logo font-weight-bold">
                    
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
                            <img src="https://ui-avatars.com/api/?name=<?php echo e(auth()->user()->name ? auth()->user()->name : 'User Name'); ?>&background=0D8ABC&color=fff"
                                alt="Avatar logo" class="rounded" height="40">
                        </div>
                        <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                    </a>
                    <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default"
                        aria-labelledby="dropdownMenuLink">

                        <?php if(auth()->user()->role == 'admin'): ?>
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="<?php echo e(route('change-password.edit', auth()->user()->id)); ?>">Ubah Password</a>
                        <?php else: ?>
                            <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="<?php echo e(route('profile.index')); ?>">Profil</a>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase"
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();this.closest('form').submit();">Keluar</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Hamburger-->
            
            <!--/.Mobile Menu Hamburger Ends-->
        </nav>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>