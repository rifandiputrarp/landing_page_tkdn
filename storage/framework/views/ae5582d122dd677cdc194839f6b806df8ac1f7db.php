<!-- Sign Up Modal -->
<div class="modal fade form-modal" id="changepassword" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog position-relative" style="max-width: 540px;">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10"
            data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div
            class="login-modal-main  bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-7 pb-13 overflow-hidden">
            <h3 class="font-size-7">Ubah Kata Sandi</h3>
            <p class=" mb-4 pb-5 font-size-4">Mohon isi data berikut dengan benar.</p>
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

            <form method="POST" action="<?php echo e(route('change-password.update', auth()->user()->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <fieldset>
                    <div class="form-group">
                        <label for="current_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                            Sandi</label>
                        <div class="position-relative">
                            <input type="password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="current_password" placeholder="Masukkan sandi lama" name="current_password"
                                value="<?php echo e(old('current_password')); ?>">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="current_password"></a>

                            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                            Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="new_password" placeholder="Masukkan sandi baru" name="new_password">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="new_password"></a>

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_confirm_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Konfirmasi
                            Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password"
                                class="form-control <?php $__errorArgs = ['new_confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="new_confirm_password" placeholder="Konfirmasi kata sandi baru"
                                name="new_confirm_password">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="new_confirm_password"></a>

                            <?php $__errorArgs = ['new_confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group mb-8">
                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Kirim</button>
                    </div>
                </fieldset>
            </form>


        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/components/change-password-modal.blade.php ENDPATH**/ ?>