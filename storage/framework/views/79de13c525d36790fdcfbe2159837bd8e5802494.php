<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

            <div class="mb-6">
                <div class="row mb-6 align-items-center">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <h3 class="font-size-6 mb-0">Daftar Pengajuan TKDN</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-lg-end">

                            <div class="h-px-48 form-inline">
                                <form method="GET" action="<?php echo e(url()->current()); ?>">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari" aria-label="Search"
                                            aria-describedby="search-addon" name="keyword" id="keyword"
                                            value="<?php echo e($search); ?>" style="height: 2.75rem; max-width: 200px;" />
                                    </div>
                                </form>

                                <?php if($search): ?>
                                    <a href="<?php echo e(route('requests.index')); ?>" class="ml-5 btn btn-danger"
                                        style="min-width: 50px">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <?php if(auth()->user()->role == 'company'): ?>
                                <div class="h-px-48 form-inline ml-3">
                                    <a class="btn btn-primary text-uppercase font-size-3" href="#" data-toggle="modal"
                                        data-target="#request">
                                        <i class="mr-4 font-size-2 fas fa-plus"></i>Pengajuan
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-8 pt-7 rounded pb-8 px-11">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">
                                        <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('request_status', 'Status'));?>
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">
                                        Lacak Status</th>
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">
                                        <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('created_at', 'Tanggal
                                        Pengajuan'));?></th>
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"
                                        style="color: #6b6e6f">
                                        <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('request_number', 'No. Pengajuan'));?>
                                    </th>
                                    <?php if(auth()->user()->role == 'admin'): ?>
                                        <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"
                                            style="color: #6b6e6f">
                                            Nama Perusahaan
                                        </th>
                                    <?php endif; ?>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"
                                        style="color: #6b6e6f">
                                        Sertifikat TKDN
                                    </th>
                                    <?php if(auth()->user()->role == 'company'): ?>
                                        <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">Aksi</th>
                                    <?php endif; ?>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $productRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    
                                    <tr class="border border-color-2">
                                        <th scope="row" class="px-6 min-width-px-135 border-0 pr-0"
                                            style="vertical-align: middle">
                                            <h3 style="background: <?php if($request->request_status == 'new'): ?> #ff0027 <?php elseif($request->request_status == 'review'): ?> #ffad00 <?php else: ?> #46c900 <?php endif; ?>;"
                                                class="font-size-3 text-uppercase text-center rounded-sm font-weight-semibold text-white mb-0">
                                                <?php echo e($request->request_status); ?>

                                            </h3>
                                        </th>
                                        <th scope="row" class="px-6 min-width-px-135 border-0 pr-0" style="vertical-align: middle">
                                            <a href="<?php echo e(route('requests.lacakstatus', $request->id)); ?>">
                                            <h3 style="background:#4f8fda" class="font-size-3 text-uppercase text-center rounded-sm font-weight-semibold text-white mb-0 p-1">
                                                Lacak Status
                                                <i class="fas fa-truck"></i>
                                            </h3>
                                            </a>
                                        </th>
                                        <td class="table-y-middle px-6 min-width-px-235 pr-0">
                                            <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">
                                                <?php echo e($request->created_at->format('d/m/Y')); ?>

                                            </h3>
                                        </td>
                                        <td class="table-y-middle px-6 min-width-px-125 pr-0">
                                            <?php if(auth()->user()->role == 'admin'): ?>
                                                <a href="<?php echo e(route('requests.edit', $request->id)); ?>"
                                                    class="media min-width-px-125 align-items-center">
                                                    <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">
                                                        <?php echo e($request->request_number); ?></h4>
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('requests.show', $request->id)); ?>"
                                                    class="media min-width-px-125 align-items-center">
                                                    <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">
                                                        <?php echo e($request->request_number); ?></h4>
                                                </a>
                                            <?php endif; ?>

                                        </td>
                                        <?php if(auth()->user()->role == 'admin'): ?>
                                            <td class="table-y-middle px-6 min-width-px-170 pr-0">
                                                <a href="<?php echo e(route('companies.show', $request->company->id)); ?>"
                                                    class="media min-width-px-235 align-items-center">
                                                    <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">
                                                        <?php echo e($request->company->name); ?></h4>
                                                </a>
                                            </td>
                                        <?php endif; ?>

                                        <?php if($request->sertificate_path && $request->request_status == 'complete'): ?>
                                            <td scope="row" class="px-6 min-width-px-170 border-0 pr-0"
                                                style="vertical-align: middle">
                                                <a href="<?php echo e(asset('storage/' . $request->sertificate_path)); ?>"
                                                    download name="sertificate_path"
                                                    class="font-size-3 font-weight-semibold"><i
                                                        class="fas fa-file-pdf m-3"></i>Unduh</a>
                                            </td>
                                        <?php else: ?>
                                            <td scope="row" class="px-6 min-width-px-170 border-0 pr-0"
                                                style="vertical-align: middle">
                                                -
                                            </td>
                                        <?php endif; ?>


                                        
                                        <?php if(auth()->user()->role == 'company'): ?>
                                            <td class="table-y-middle px-6 pr-0">
                                                <div class=""><a
                                                        href="<?php echo e(route('requests.edit', $request->id)); ?>"
                                                        class="font-size-3 font-weight-bold text-blue-2 text-uppercase">Edit</a>
                                                </div>
                                            </td>
                                        <?php endif; ?>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php if($productRequests->isEmpty()): ?>
                            <h3 class="font-size-4 font-weight-normal text-black-2 text-center my-10">
                                Data belum tersedia
                            </h3>
                        <?php endif; ?>

                    </div>

                    <div class="pt-2">
                        <?php echo e($productRequests->links()); ?>

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
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/requests-list.blade.php ENDPATH**/ ?>