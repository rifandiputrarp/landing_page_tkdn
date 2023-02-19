<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <div class="mobile-version">
        <div style="margin: 0 auto;" class=" py-6 px-lg-13 px-6">
            <img src="/image/white_logo.png" alt="Sucofindo Logo" height="100">
        </div>
        <div style="max-width: 600px; margin: 0 auto;">
            <img class="auth-circle" src="https://dashboard.prakerja.go.id/assets/v2/images/auth-bg.svg" alt="">

            <div class="container">
                <div class="mb-15 mb-lg-23">
                    <div class="row">
                        <div class="col-xxxl-12 px-lg-13 px-6">

                            <div
                                class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">
                                <h3>Masuk Akun</h3>
                                <p class="font-size-4">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

                                <!-- Session Status -->
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success mb-8" role="alert">
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Validation Errors -->
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="email"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com"
                                            id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                                            Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Kata sandi" name="password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                data-show-pass="password"></a>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">
                                        <label for="remember_me" class="gr-check-input d-flex  mr-3">
                                            <input class="d-none" type="checkbox" id="remember_me"
                                                name="remember">
                                            <span class="checkbox mr-5"></span>
                                            <span class="font-size-3 line-height-reset mb-1 d-block"
                                                style="user-select: none;">Remember Me</span>
                                        </label>
                                        <?php if(Route::has('password.request')): ?>
                                            <a href="<?php echo e(route('password.request')); ?>"
                                                class="font-size-3 text-dodger line-height-reset">Lupa kata sandi?</a>
                                        <?php endif; ?>

                                    </div>
                                    <div class="form-group mb-8">
                                        <button
                                            class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Masuk</button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Belum Memiliki Akun? <a
                                            href="<?php echo e(route('register-company')); ?>" class="text-primary font-semibold">
                                            <u>Daftar</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-9 col-lg-8 col-md-7 p-0 frame-left" style="background-color: white">
                    <div class="d-flex" style="height: 100vh">
                        <img src="<?php echo e(asset('image/bg-login.png')); ?>" alt="Sucofindo Logo" style="width: 100%">
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-5 p-0 frame-right" style="background-color: white;">
                    <div class="header-login-logo" style="height: 13.31vh">
                    </div>
                    <div class="contact-form shadow-8 pl-sm-6 pl-2 pr-sm-9 pr-2 pt-8 pb-13">
                        <h4>Masuk Akun</h4>
                        <p class="font-size-3">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

                        <!-- Session Status -->
                        <?php if(session('status')): ?>
                            <div class="alert alert-success mb-8" role="alert">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Validation Errors -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email"
                                    class="font-size-3 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="password"
                                    class="font-size-3 text-black-2 font-weight-semibold line-height-reset">Kata
                                    Sandi</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" placeholder="Kata sandi"
                                        name="password">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <label for="remember_me" class="gr-check-input d-flex  mr-3">
                                    <input class="d-none" type="checkbox" id="remember_me" name="remember">
                                    <span class="checkbox mr-5"></span>
                                    <span class="font-size-3 line-height-reset mb-1 d-block"
                                        style="user-select: none;">Remember Me</span>
                                </label>
                                <?php if(Route::has('password.request')): ?>
                                    <a href="<?php echo e(route('password.request')); ?>"
                                        class="font-size-3 text-dodger line-height-reset">Lupa kata sandi?</a>
                                <?php endif; ?>

                            </div>
                            <div class="form-group mb-6">
                                <button style="height: 45px"
                                    class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Masuk</button>
                            </div>
                            <p class="font-size-3 text-center heading-default-color">Belum Memiliki Akun? <a
                                    href="<?php echo e(route('register-company')); ?>" class="text-primary font-semibold">
                                    <u>Daftar</u></a></p>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/auth/login.blade.php ENDPATH**/ ?>