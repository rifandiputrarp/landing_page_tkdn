  <!-- Sign Up Modal -->
  <div class="modal fade form-modal" id="request" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog position-relative" style="max-width: 900px;">
          <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10"
              data-dismiss="modal"><i class="fas fa-times"></i></button>
          <div
              class="login-modal-main  bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-7 pb-13 overflow-hidden">
              <h3 class="font-size-7">Form Pengajuan</h3>
              <div class="mb-4 pb-5">
                  <p class="font-size-4">
                      Program Sertifikasi TKDN Gratis merupakan kegiatan yang diadakan oleh Pemerintah (Kementrian
                      Perindustrian) untuk meningkatkan penggunaan produk dalam negeri. Mengenai hal tersebut, PT.
                      SUCOFINDO
                      selaku Surveyor independen yang ditunjuk sebagai pelaksana berdasarkan Peraturan Menteri
                      Perindustrian
                      No. 57/M-IND/PER/5/2006 dengan ini menyampaikan kepada seluruh Industri Dalam Negeri untuk
                      mengikuti
                      program ini.
                  </p>
              </div>


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

              <form method="POST" action="<?php echo e(route('requests.store')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <fieldset>
                      <div class="mb-8">
                          <div class="form-group">
                              <label for="product_qty"
                                  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jumlah
                                  Produk</label>
                              <input type="number" class="form-control h-px-48" id="product_qty" name="product_qty"
                                  min="1" oninput="genTable(this.value)" required autofocus>
                          </div>
                      </div>

                      <div class="mb-8">
                          <div class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Rincian
                              Produk</div>
                          <tr>
                              <td colspan="5">
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr class="text-black-2 font-size-4 font-weight-semibold">
                                              <th>No</th>
                                              <th>Nama/Jenis Produk</th>
                                              <th>Tipe Produk</th>
                                              <th>Spesifikasi Produk</th>
                                          </tr>
                                      </thead>
                                      <tbody id="dummy">
                                          <tr>
                                              <td colspan="5" style="text-align: center"> Silahkan lengkapi data produk
                                              </td>
                                          </tr>
                                      </tbody>
                                      <tbody id="produk">
                                      </tbody>

                                  </table>
                              </td>
                          </tr>
                      </div>

                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama Perusahaan</label>
                                <input type="namaperusahaan" class="form-control" id="namaperusahaan">
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                <input type="npwp" class="form-control" id="npwp">
                            </div>
                        </div>
                      
                        <div class="mb-8">
							<div class="form-group">
								<label for="product_qty"
                                  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Alamat</label>
								<textarea class="form-control"></textarea>
							</div>
						</div>

                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Kategori Perusahaan</label>
                                
                                    <div class="form-group">
                                        <select class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                  
							</div>
						</div>

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
                                            <option>
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
                                        value=""
                                        placeholder="" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="approved_at"
                                        class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tanggal</label>
                                    <input id="approved_at" name="approved_at" type="text"
                                        class="form-control h-px-48"
                                        value="" placeholder=""
                                        disabled>
                                </div>
                            </div>
                        </div>

                        
                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Pilih Verifikator</label>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                            <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        
                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NIB</label>
                                <input type="nib" class="form-control" id="nib">
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="form-group">
                                <label for="product_qty"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No. Akte Pendirian</label>
                                <input type="aktependirian" class="form-control" id="aktependirian">
                            </div>
                        </div>

                        <div class="mb-10">
                            <div class="form-group">
                                <label for="surat_permohonan"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                    NIB / IUI </label>
                                <div>
                                    <input type="file" name="surat_permohonan"
                                        class="form-control h-px-48 <?php $__errorArgs = ['surat_permohonan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        style="padding: 5px" id="surat_permohonan"
                                        required
                                    >
                                    <?php $__errorArgs = ['surat_permohonan'];
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
                        </div>

                        <div class="mb-10">
                            <div class="form-group">
                                <label for="surat_permohonan"
                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                    Dokumen Pendukung Lainnya </label>
                                <div>
                                    <input type="file" name="surat_permohonan"
                                        class="form-control h-px-48 <?php $__errorArgs = ['surat_permohonan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        style="padding: 5px" id="surat_permohonan"
                                        required
                                    >
                                    <?php $__errorArgs = ['surat_permohonan'];
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
                        </div>

                    <div class="mb-10">
                        <div class="form-group mb-8">
                            <div class="btn-group md-8">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" disabled>Download Template Surat Permohonan &nbsp;&nbsp;</button>
                                <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="/template/Draft_Permohonan_Sertifikat_P3DN.docx">P3DN</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/template/Draft_Permohonan_Sertifikat_Komersil.docx">Komersil</a>
                                </div>
                            </div>
                            <br>
                        </div>
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
                                        <option>
                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-10">
                        <div class="form-group mb-8">
                            <div class="btn-group md-8">
                                <a href="/template/Lampiran_Pelaksanaan_Verifikasi.docx"><button type="button" class="btn btn-primary dropdown-toggle">Download Template Lampiran Pelaksanaan Verifikasi &nbsp;&nbsp;</button></a>
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="lampiran_permohonan"
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                Lampiran Pelaksanaan Verifikasi </label>
                            <div class="input-group control-group increment">
                                <input type="file" name="lampiran_permohonan"
                                    class="form-control h-px-48 <?php $__errorArgs = ['lampiran_permohonan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    style="padding: 5px" id="lampiran_permohonan"
                                    required
                                >
                                <?php $__errorArgs = ['lampiran_permohonan'];
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
                    </div>
                    
                    

                      <div class="mb-10">
                          <div class="form-group">
                              <label for="attachment_path"
                                  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                  File Tambahan </label>
                              <div class="input-group control-group increment">
                                  <input type="file" name="attachment_path[]"
                                      class="form-control h-px-48 <?php $__errorArgs = ['attachment_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      style="padding: 5px" id="attachment_path">
                                  <?php $__errorArgs = ['attachment_path'];
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
                              <div class="clone hide">
                                  <div class="control-group input-group" style="margin-top:10px">
                                      <input type="file" name="attachment_path[]"
                                          class="form-control h-px-48 <?php $__errorArgs = ['attachment_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                          style="padding: 5px" id="attachment_path">
                                      <?php $__errorArgs = ['attachment_path'];
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
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/components/product-request-modal.blade.php ENDPATH**/ ?>