<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>
        <?php echo e(config('app.name', 'Laravel')); ?>

    </title>
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">
    <!-- Bootstrap , fonts & icons  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/icon-font/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/typography-font/typo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/fontawesome-5/css/all.css')); ?>">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/aos/aos.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fancybox/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/nice-select/nice-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/ui-range-slider/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.css')); ?>">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <!-- Custom stylesheet -->
</head>

<body>
    <div class="site-wrapper overflow-hidden bg-default-2 min-vh-100">
        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(auth()->user()->role != 'student' && !request()->routeIs('companies.show') && !request()->routeIs('requests.show')): ?>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product-request-modal','data' => []]); ?>
<?php $component->withName('product-request-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.change-password-modal','data' => []]); ?>
<?php $component->withName('change-password-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    </div>
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Vendor Scripts -->
    <script src="<?php echo e(asset('js/vendor.min.js')); ?>"></script>
    <!-- Plugin's Scripts -->
    <script src="<?php echo e(asset('plugins/fancybox/jquery.fancybox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/nice-select/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/aos/aos.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/counter-up/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/counter-up/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/ui-range-slider/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <!-- Activation Script -->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/layouts/app.blade.php ENDPATH**/ ?>