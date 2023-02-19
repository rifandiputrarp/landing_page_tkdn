<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="mb-6">
                <div class="mt-6">

                    <div class="container">

                        <div class="mb-15 mb-lg-10">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <h3 class="font-size-6 mb-8">Edit Registrasi</h3>
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">

                                        <h3 class="font-size-5 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                            Form
                                            Registrasi Perusahaan</h3>

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

                                        <form method="POST" action="<?php echo e(route('companies.update', $company->id)); ?>"
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
                                                                value="<?php echo e(old('name', $company->name)); ?>"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                            <input id="npwp" name="npwp" type="text"
                                                                class="form-control h-px-48"
                                                                value="<?php echo e(old('npwp', $company->npwp)); ?>"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="person_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                                Jawab</label>
                                                            <input id="person_in_charge" name="person_in_charge"
                                                                type="text" class="form-control h-px-48"
                                                                value="<?php echo e(old('person_in_charge', $company->person_in_charge)); ?>"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="phone_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                            <input type="tel" class="form-control h-px-48"
                                                                id="phone_in_charge" name="phone_in_charge"
                                                                value="<?php echo e(old('phone_in_charge', $company->phone_in_charge)); ?>"
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
                                                                value="<?php echo e(old('email', $company->email)); ?>" readonly>
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
                                                                        <?php echo e(old('business_capital', $company->business_capital) == $netWorth['value'] ? 'selected' : ''); ?>

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

                                                            <?php if($company->npwp_file_path): ?>
                                                                <a href="<?php echo e(asset('storage/' . $company->npwp_file_path)); ?>"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i><?php echo e($company->npwp_file_path); ?></a>
                                                            <?php endif; ?>

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

                                                            <?php if($company->iui_file_path): ?>
                                                                <a href="<?php echo e(asset('storage/' . $company->iui_file_path)); ?>"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i><?php echo e($company->iui_file_path); ?></a>
                                                            <?php endif; ?>

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

                                                        <?php if($company->others_file_path): ?>
                                                            <div class="form-group mb-8">
                                                                <label for="others_file_path"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                                    Lainnya</label>
                                                                <input
                                                                    class="form-control h-px-48 <?php $__errorArgs = ['others_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    style="padding: 5px" type="file"
                                                                    id="others_file_path" name="others_file_path">

                                                                <?php if($company->others_file_path): ?>
                                                                    <a href="<?php echo e(asset('storage/' . $company->others_file_path)); ?>"
                                                                        download
                                                                        class="font-size-2 font-weight-semibold"><i
                                                                            class="fas fa-file-pdf m-3"></i><?php echo e($company->others_file_path); ?></a>
                                                                <?php endif; ?>

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
                                                        <?php endif; ?>


                                                    </div>
                                                </div>

                                                

                                                <h3 class="font-size-6 pb-2 mb-11"
                                                    style="border-bottom: 1px solid #e5e5e5">
                                                    Status Verifikasi Data</h3>

                                                <div class="row">
                                                    <div class="col-lg-4 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="status"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                                Status
                                                            </label>
                                                            <select id="status"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6"
                                                                name="status">
                                                                <option value="">--</option>
                                                                <?php $__currentLoopData = config('staticvalues.companyStatus'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        <?php echo e(old('status', $company->status) == $companyStatus['key'] ? 'selected' : ''); ?>

                                                                        value="<?php echo e($companyStatus['key']); ?>">
                                                                        <?php echo e($companyStatus['value']); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="approved_by"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Oleh
                                                                : </label>
                                                            <input id="approved_by" name="approved_by" type="text"
                                                                class="form-control h-px-48"
                                                                value="<?php echo e(auth()->user()->name ? auth()->user()->name : 'Admin'); ?>"
                                                                placeholder="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="approved_at"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tanggal</label>
                                                            <input id="approved_at" name="approved_at" type="text"
                                                                class="form-control h-px-48"
                                                                value="<?php echo e($current_date_time); ?>" placeholder=""
                                                                disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="note"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan</label>
                                                            <textarea name="note" id="note" cols="30" rows="7"
                                                                class="border border-mercury text-gray w-100 pt-4 pl-6"><?php echo e(old('note', $company->note)); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-8 py-4">
                                                    <input type="submit" value="Simpan"
                                                        class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">

                                        <h3 class="font-size-5 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                            Form
                                            Registrasi Individu</h3>

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

                                        <form method="POST" action="<?php echo e(route('companies.update', $company->id)); ?>"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PATCH'); ?>
                                            <fieldset>
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="name"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NIK</label>
                                                            <input id="nik" name="nik" type="text"
                                                                class="form-control h-px-48"
                                                                value=""
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="person_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama</label>
                                                            <input id="person_in_charge" name="person_in_charge"
                                                                type="text" class="form-control h-px-48"
                                                                value="<?php echo e(old('person_in_charge', $company->person_in_charge)); ?>"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                            <input id="npwp" name="npwp" type="text"
                                                                class="form-control h-px-48"
                                                                value="<?php echo e(old('npwp', $company->npwp)); ?>"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.Telepon</label>
                                                            <input id="telepon" name="telepon" type="text"
                                                                class="form-control h-px-48"
                                                                value=""
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="email"
                                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                                            <input type="email" class="form-control"
                                                            placeholder="example@gmail.com" id="email" name="email"
                                                            value="<?php echo e(old('email', $company->email)); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="product_qty"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Alamat</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload NPWP
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

                                                            <?php if($company->npwp_file_path): ?>
                                                                <a href="<?php echo e(asset('storage/' . $company->npwp_file_path)); ?>"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i><?php echo e($company->npwp_file_path); ?></a>
                                                            <?php endif; ?>

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
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="iui_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload NIK</label>
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

                                                            <?php if($company->iui_file_path): ?>
                                                                <a href="<?php echo e(asset('storage/' . $company->iui_file_path)); ?>"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i><?php echo e($company->iui_file_path); ?></a>
                                                            <?php endif; ?>

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

                                                    <?php if($company->others_file_path): ?>
                                                        <div class="form-group mb-6">
                                                            <label for="others_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                                Lainnya</label>
                                                            <input
                                                                class="form-control h-px-48 <?php $__errorArgs = ['others_file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                style="padding: 5px" type="file"
                                                                id="others_file_path" name="others_file_path">

                                                            <?php if($company->others_file_path): ?>
                                                                <a href="<?php echo e(asset('storage/' . $company->others_file_path)); ?>"
                                                                    download
                                                                    class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i><?php echo e($company->others_file_path); ?></a>
                                                            <?php endif; ?>

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
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group mb-6 py-4">
                                                    <input type="submit" value="Simpan"
                                                        class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
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
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/admin/company-edit.blade.php ENDPATH**/ ?>