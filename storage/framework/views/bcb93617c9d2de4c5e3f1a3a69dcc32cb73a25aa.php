<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div style="margin: 0 auto;" class=" py-6 px-lg-13 px-6">
        <a href="<?php echo e(route('home')); ?>">
            <img src="/image/white_logo.png" alt="Sucofindo Logo" height="100">
        </a>
    </div>
    <div style="max-width: 768px; margin: 0 auto;">
        <img class="auth-circle-register" src="https://dashboard.prakerja.go.id/assets/v2/images/auth-bg.svg" alt="">
        <div class="container">
            <div class="mb-15 mb-lg-23">
                <div class="row">
                    <div class="col-xxxl-9 px-lg-13 px-6">
                        <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-7 pb-13">
                            <h3 class="font-size-7">Registrasi Perusahaan</h3>
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

                            <form method="POST" action="<?php echo e(route('register-company')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <fieldset>
                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="corporate_body"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Badan Perusahaan
                                            </label>
                                            <select id="corporate_body" class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6" name="corporate_body" required>
                                                <option value="">Pilih Salah Satu</option>
                                                <option value="PT">PT</option>
                                                <option value="CV">CV</option>
                                                <option value="Firma">Firma</option>
                                                <option value="Koperasi">Koperasi</option>
                                                <option value="PD">PD</option>
                                                <option value="UD">UD</option>
                                                <option value="Kementrian / Lembaga Lainnya">Kementrian / Lembaga Lainnya</option>
                                                <option value="UU"> UU</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="name"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama
                                                Perusahaan</label>
                                            <input type="text" class="form-control h-px-48" id="name" name="name"
                                                value="<?php echo e(old('name')); ?>" placeholder="ex : SUCOFINDO, PT" required
                                                autofocus>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="business_capital"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                Kategori Perusahaan Berdasarkan PP UMKM NO. 7 TAHUN 2021
                                            </label>
                                            <select id="business_capital"
                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6"
                                                name="business_capital">
                                                <option value="">--</option>
                                                <?php $__currentLoopData = config('staticvalues.netWorth'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $netWorth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e(old('business_capital') == $netWorth['value'] ? 'selected' : ''); ?>

                                                        value="<?php echo e($netWorth['value']); ?>">
                                                        <?php echo e($netWorth['value']); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="npwp"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.
                                                NPWP</label>
                                            <input type="text" class="form-control h-px-48" id="npwp" name="npwp"
                                                value="<?php echo e(old('npwp')); ?>" placeholder="xxxx xxxx xxxx xxx"
                                                data-slots="x" data-accept="\d" size="15">
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="person_in_charge"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                Jawab</label>
                                            <input type="text" class="form-control h-px-48" id="person_in_charge"
                                                name="person_in_charge" value="<?php echo e(old('person_in_charge')); ?>">
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="phone_in_charge"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.
                                                HP/Telp</label>
                                            <input type="tel" class="form-control h-px-48" id="phone_in_charge"
                                                name="phone_in_charge" value="<?php echo e(old('phone_in_charge')); ?>" required>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="npwp_file_path"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                NPWP <span class="text-red">*</span></label>
                                            <input
                                                class="form-control h-px-48 <?php $__errorArgs = ['npwp_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                style="padding: 5px" type="file" id="npwp_file_path"
                                                name="npwp_file_path">
                                            <?php $__errorArgs = ['npwp_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger">
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="iui_file_path"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                IUI <span class="text-red">*</span></label>
                                            <input
                                                class="form-control h-px-48  <?php $__errorArgs = ['iui_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                style="padding: 5px" type="file" id="iui_file_path"
                                                name="iui_file_path">

                                            <?php $__errorArgs = ['iui_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger">
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="others_file_path"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                Lainnya(Opsional)</label>
                                            <input class="form-control h-px-48" style="padding: 5px" type="file"
                                                id="others_file_path" name="others_file_path">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="email" name="email" value="<?php echo e(old('email')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="password"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                                            Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter password" name="password">
                                            <a class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                style="cursor: pointer" data-show-pass="password"></a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Konfirmasi
                                            Kata Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                placeholder="Enter password" name="password_confirmation">
                                            <a class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                style="cursor: pointer" data-show-pass="password_confirmation"></a>
                                        </div>
                                    </div>
                                    <div class="form-group mb-8 py-4">
                                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase"
                                            onclick="event.preventDefault();
                                        Swal.fire({
                                            title: `<div> <div style='display: flex;justify-content: space-between; align-items: center; margin-bottom: 1.5rem'> <img src='/image/svg/kemenper.svg' height='40' /> <img src='/image/sucofindo.png' height='50' /> </div><p>Selamat Bergabung <span style='color:#4f8fda'>${document.getElementById('name').value}</span>, Terima Kasih sudah melakukan pendaftaran akun vendor.</p></div>` ,
                                            text:`Berikut ini adalah username: ${document.getElementById('email').value}`,
                                            showCancelButton: false,
                                            confirmButtonText: 'Save',
                                            confirmButtonText:'Klik Untuk Masuk Ke Akun',
                                            width: 768
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                this.closest('form').submit();
                                            }
                                        });">
                                            Daftar</button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Sudah memiliki akun? <a
                                            href="<?php echo e(route('login')); ?>" class="text-primary">Masuk</a></p>

                                </fieldset>
                            </form>
                        </div>
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
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/auth/register-company.blade.php ENDPATH**/ ?>