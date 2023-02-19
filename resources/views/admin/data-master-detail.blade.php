<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

          <div class="mb-6">
            <div class="mt-6">

              <div class="container">
                <div class="mb-15 mb-lg-23">
                  <div class="row">
                    <div class="col-xxxl-9">
                      <!-- back Button -->
                      <div>
                        <div class="mb-9">
                          <a class="d-flex align-items-center ml-4" href="{{ route('alumni.index') }}"> <i
                              class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
                            </i><span class="text-uppercase font-size-3 font-weight-bold text-gray">Kembali</span></a>
                        </div>
                      </div>
                      <!-- back Button End -->
                      <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">
                        <div class="mb-16 text-center" style="max-width: 150px; margin: 0 auto;">
                          <img src="https://images.unsplash.com/photo-1523203658085-27859efeaa41?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" style="object-fit: cover; max-height: 150px;" class="rounded w-100" alt="Profile">
                          <!-- <img id="imgPrime" src="" alt="uploaded image placeholder" /> -->
                          <!-- <input type="file" id="upfile"> -->
                        </div>
                        <div class="container">
                         <dl class="row">
                           <dt class="col-sm-3 mb-7">Nama</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->name }}</dd>

                           <dt class="col-sm-3 mb-7">NIM</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->nim }}</dd>

                           <dt class="col-sm-3 mb-7 text-truncate">Program Studi</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->prodi }}</dd>

                           <dt class="col-sm-3 mb-7 text-truncate">Fakultas</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->faculty }}</dd>

                           <dt class="col-sm-3 mb-7 text-truncate">Tahun Angkatan</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->class_year }}</dd>

                           <dt class="col-sm-3 text-truncate">Tahun Lulus</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->graduate_year }}</dd>

                           <dt class="col-sm-3 mb-7 text-truncate ">Email</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->email }}</dd>

                           <dt class="col-sm-3 mb-7  text-truncate">Telepon</dt>
                           <dd class="col-sm-9 mb-7">{{ $alumnus->studentInfo->phone }}</dd>

                         </dl>

                       </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
</x-app-layout>
