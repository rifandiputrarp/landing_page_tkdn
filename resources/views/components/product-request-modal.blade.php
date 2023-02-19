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
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <form method="POST" action="{{ route('requests.store') }}" enctype="multipart/form-data">
                  @csrf
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
                                        @foreach (config('staticvalues.companyStatus') as $companyStatus)
                                            <option>
                                            </option>
                                        @endforeach
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
                                        class="form-control h-px-48 @error('surat_permohonan') is-invalid @enderror"
                                        style="padding: 5px" id="surat_permohonan"
                                        required
                                    >
                                    @error('surat_permohonan')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                                        class="form-control h-px-48 @error('surat_permohonan') is-invalid @enderror"
                                        style="padding: 5px" id="surat_permohonan"
                                        required
                                    >
                                    @error('surat_permohonan')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                                    @foreach (config('staticvalues.companyStatus') as $companyStatus)
                                        <option>
                                        </option>
                                    @endforeach
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
                                    class="form-control h-px-48 @error('lampiran_permohonan') is-invalid @enderror"
                                    style="padding: 5px" id="lampiran_permohonan"
                                    required
                                >
                                @error('lampiran_permohonan')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                                      class="form-control h-px-48 @error('attachment_path') is-invalid @enderror"
                                      style="padding: 5px" id="attachment_path">
                                  @error('attachment_path')
                                      <div class="alert alert-danger">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                  {{-- <div class="input-group-btn">
                                      <button class="btn btn-success h-px-48 ml-5" type="button"
                                          style="min-width: 90px;"><i
                                              class="glyphicon glyphicon-plus fas fa-plus"></i></button>
                                  </div> --}}
                              </div>
                              <div class="clone hide">
                                  <div class="control-group input-group" style="margin-top:10px">
                                      <input type="file" name="attachment_path[]"
                                          class="form-control h-px-48 @error('attachment_path') is-invalid @enderror"
                                          style="padding: 5px" id="attachment_path">
                                      @error('attachment_path')
                                          <div class="alert alert-danger">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                      {{-- <div class="input-group-btn">
                                          <button class="btn btn-danger h-px-48 ml-5" type="button"
                                              style="min-width: 90px;"><i
                                                  class="glyphicon glyphicon-remove fas fa-minus"></i></button>
                                      </div> --}}
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
