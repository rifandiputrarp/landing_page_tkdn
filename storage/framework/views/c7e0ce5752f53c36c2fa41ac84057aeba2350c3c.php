<div class="dashboard-sidebar-wrapper pt-11" id="sidebar">
    <div class="brand-logo px-11">
        <a href="https://shade.uxtheme.net/shade-pro">
            <img src="/image/logo-main-black.png" alt="">
        </a>
    </div>
    <div class="my-15 px-11">

    </div>
    <ul class="list-unstyled dashboard-layout-sidebar">

        <li class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>"
                class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i
                    class="fas fa-home mr-7"></i></i>Beranda</a></li>

        <?php if(auth()->user()->role == 'admin'): ?>
            <li class="<?php echo e(request()->routeIs('companies.*') ? 'active' : ''); ?>"><a
                    href="<?php echo e(route('companies.index')); ?>"
                    class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i
                        class="fas fa-building mr-7"></i>Registrasi</a></li>
        <?php endif; ?>
        <li class="<?php echo e(request()->routeIs('requests.*') ? 'active' : ''); ?>"><a href="<?php echo e(route('requests.index')); ?>"
                class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i
                    class="fas font-size-5 fa-clipboard-list mr-8"></i>Pengajuan
                <?php if(auth()->user()->role == 'admin' && $count_request > 0): ?>
                    <span
                        class="ml-auto px-1 h-1 bg-dodger text-white font-size-3 rounded-5 max-height-px-18 flex-all-center"><?php echo e($count_request); ?></span>
                <?php endif; ?>
            </a>
        </li>
        <?php if(auth()->user()->role == 'company'): ?>
            <li class="<?php echo e(request()->routeIs('dasar-hukum.*') ? 'active' : ''); ?>"><a
                    href="<?php echo e(route('dasar-hukum.index')); ?>"
                    class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i
                        class="fas fa-balance-scale mr-7"></i>Dasar Hukum</a></li>
        <?php endif; ?>
        <?php if(auth()->user()->role == 'admin'): ?>
            <li class="<?php echo e(request()->routeIs('data-master.*') ? 'active' : ''); ?>"><a
                    href="<?php echo e(route('data-master.index')); ?>"
                    class="px-10 py-1 my-5 font-size-4 font-weight-semibold flex-y-center"><i
                        class="fas fa-user mr-7"></i>Data Master</a></li>
        <?php endif; ?>
    </ul>
</div>
<a class="sidebar-mobile-button" data-toggle="collapse" href="#sidebar" role="button" aria-expanded="false"
    aria-controls="sidebar">
    <i class="icon icon-sidebar-2"></i>
</a>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>