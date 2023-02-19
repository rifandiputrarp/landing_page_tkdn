<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="container">

                <div class="mb-15 mb-lg-23">
                    <div class="row">
                        <div class="col-xxxl-9 px-lg-13 px-6">

                            <!-- back Button -->
                            <div class="mb-9">
                                <a class="d-flex align-items-center" href="<?php echo e(route('home')); ?>"> <i
                                        class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
                                    </i><span
                                        class="text-uppercase font-size-3 font-weight-bold text-gray">Kembali</span></a>
                            </div>
                            <!-- back Button End -->

                            <div
                                class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                <!-- Session Status -->
                                <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>

                                <div class="mb-11 d-flex justify-content-between"
                                    style="border-bottom: 1px solid #e5e5e5">
                                    <h3 class="font-size-6 pb-2">
                                        Data Profil</h3>
                                    <a class="btn btn-info text-uppercase font-size-3" href="#" data-toggle="modal"
                                        data-target="#changepassword">
                                        <i class="mr-4 font-size-2 fas fa-lock"></i>Ubah Kata Sandi</a>
                                    </a>
                                </div>


                                <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

                                <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="POST" action="<?php echo e(route('profile.update', $profile->id)); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <fieldset>
                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama
                                                            Perusahaan</label>
                                                        <input id="name" name="name" type="text"
                                                            class="form-control h-px-48"
                                                            value="<?php echo e(old('name', $profile->name)); ?>" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="npwp"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                        <input id="npwp" name="npwp" type="text"
                                                            class="form-control h-px-48"
                                                            value="<?php echo e(old('npwp', $profile->npwp)); ?>" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="person_in_charge"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                            Jawab</label>
                                                        <input id="person_in_charge" name="person_in_charge" type="text"
                                                            class="form-control h-px-48"
                                                            value="<?php echo e(old('person_in_charge', $profile->person_in_charge)); ?>"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone_in_charge"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                        <input type="tel" class="form-control h-px-48"
                                                            id="phone_in_charge" name="phone_in_charge"
                                                            value="<?php echo e(old('phone_in_charge', $profile->phone_in_charge)); ?>"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="email"
                                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="example@gmail.com" id="email" name="email"
                                                            value="<?php echo e(old('email', $profile->email)); ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="business_capital"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                            Kategori Perusahaan
                                                        </label>
                                                        <select id="business_capital"
                                                            class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6"
                                                            name="business_capital">
                                                            <option value="">--</option>
                                                            <?php $__currentLoopData = config('staticvalues.netWorth'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $netWorth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php echo e(old('business_capital', $profile->business_capital) == $netWorth['value'] ? 'selected' : ''); ?>

                                                                    value="<?php echo e($netWorth['value']); ?>">
                                                                    <?php echo e($netWorth['value']); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-12 mb-xl-0 mb-7">
                                                    <h3 class="text-black-2 font-size-4 font-weight-semibold mb-8">
                                                        Lampiran :</h3>

                                                    <div class="form-group mb-8">
                                                        <label for="npwp_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP
                                                        </label>
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

                                                        <?php if($profile->npwp_file_path): ?>
                                                            <a href="<?php echo e(asset('storage/' . $profile->npwp_file_path)); ?>"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i><?php echo e($profile->npwp_file_path); ?></a>
                                                        <?php endif; ?>

                                                        
                                                        <input type="text" class="form-control sr-only"
                                                            id="npwp_file_path" name="existed_npwp_file_path"
                                                            value="<?php echo e($profile->npwp_file_path); ?>" multiple readonly>
                                                        

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

                                                    <div class="form-group mb-8">
                                                        <label for="iui_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">IUI</label>
                                                        <input
                                                            class="form-control h-px-48 <?php $__errorArgs = ['iui_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            style="padding: 5px" type="file" id="iui_file_path"
                                                            name="iui_file_path">

                                                        <?php if($profile->iui_file_path): ?>
                                                            <a href="<?php echo e(asset('storage/' . $profile->iui_file_path)); ?>"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i><?php echo e($profile->iui_file_path); ?></a>
                                                        <?php endif; ?>

                                                        
                                                        <input type="text" class="form-control sr-only"
                                                            id="iui_file_path" name="existed_iui_file_path"
                                                            value="<?php echo e($profile->iui_file_path); ?>" multiple readonly>
                                                        

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

                                                    <div class="form-group mb-8">
                                                        <label for="others_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                            Lainnya(Opsional)</label>
                                                        <input
                                                            class="form-control h-px-48 <?php $__errorArgs = ['others_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                            style="padding: 5px" type="file" id="others_file_path"
                                                            name="others_file_path">

                                                        <?php if($profile->others_file_path): ?>
                                                            <a href="<?php echo e(asset('storage/' . $profile->others_file_path)); ?>"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i><?php echo e($profile->others_file_path); ?></a>
                                                        <?php endif; ?>

                                                        
                                                        <input type="text" class="form-control sr-only"
                                                            id="others_file_path" name="existed_others_file_path"
                                                            value="<?php echo e($profile->others_file_path); ?>" multiple
                                                            readonly>
                                                        

                                                        <?php $__errorArgs = ['others_file_path'];
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

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="note"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan
                                                                    Admin</label>

                                                                <textarea name="note" id="note" cols="30" rows="7" disabled
                                                                    class="border border-mercury text-gray w-100 pt-4 pl-6"><?php echo e($profile->note ? $profile->note : '-'); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            

                                            


                                            <div class="form-group mb-8 py-4">
                                                <input type="submit" value="Simpan"
                                                    class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                            </div>
                                        </fieldset>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/profile.blade.php ENDPATH**/ ?>