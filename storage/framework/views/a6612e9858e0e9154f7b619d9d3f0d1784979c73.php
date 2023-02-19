<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="dashboard-main-container mt-24" id="dashboard-body">
        <div class="container">
            <div>
                <div class="row mb-6 align-items-center">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <h3 class="font-size-6 mb-0">Dasar Hukum</h3>
                    </div>
                </div>
                <div class="mb-8">

                    <?php $__currentLoopData = config('staticvalues.legalBasis'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $legalBasis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-8">
                            <div
                                class="pt-7 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="media align-items-center">
                                            <div class="font-size-5 heading-default-color mr-8">
                                                <?php echo e($loop->iteration . '.'); ?>

                                            </div>
                                            <div>
                                                <h3 class="mb-0"><a class="font-size-5 heading-default-color"
                                                        href="<?php echo e('storage/' . $legalBasis['file_path']); ?>"
                                                        target="_blank"><?php echo e($legalBasis['value']); ?></a>
                                                </h3>
                                                <p class="font-size-4 text-default-color line-height-2">
                                                    <?php echo e($legalBasis['key']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-right pt-7 pt-md-5">
                                        <div class="media justify-content-md-end">
                                            <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2"
                                                href="<?php echo e('storage/' . $legalBasis['file_path']); ?>" target="_blank">
                                                <p class="font-weight-bold font-size-4 text-hit-gray mb-0"><span
                                                        class="text-black-2"><i class="fas fa-file-pdf mr-7"></i>Unduh
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/company/legal-basis.blade.php ENDPATH**/ ?>