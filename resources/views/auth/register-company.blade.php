<x-guest-layout>
    <div style="margin: 0 auto;" class=" py-6 px-lg-13 px-6">
        <a href="{{ route('home') }}">
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
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register-company') }}"
                                enctype="multipart/form-data">
                                @csrf
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
                                                value="{{ old('name') }}" placeholder="ex : SUCOFINDO, PT" required
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
                                                @foreach (config('staticvalues.netWorth') as $netWorth)
                                                    <option
                                                        {{ old('business_capital') == $netWorth['value'] ? 'selected' : '' }}
                                                        value="{{ $netWorth['value'] }}">
                                                        {{ $netWorth['value'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="npwp"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.
                                                NPWP</label>
                                            <input type="text" class="form-control h-px-48" id="npwp" name="npwp"
                                                value="{{ old('npwp') }}" placeholder="xxxx xxxx xxxx xxx"
                                                data-slots="x" data-accept="\d" size="15">
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="person_in_charge"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                Jawab</label>
                                            <input type="text" class="form-control h-px-48" id="person_in_charge"
                                                name="person_in_charge" value="{{ old('person_in_charge') }}">
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="phone_in_charge"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.
                                                HP/Telp</label>
                                            <input type="tel" class="form-control h-px-48" id="phone_in_charge"
                                                name="phone_in_charge" value="{{ old('phone_in_charge') }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="npwp_file_path"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                NPWP <span class="text-red">*</span></label>
                                            <input
                                                class="form-control h-px-48 @error('npwp_file_path') is-invalid @enderror"
                                                style="padding: 5px" type="file" id="npwp_file_path"
                                                name="npwp_file_path">
                                            @error('npwp_file_path')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="iui_file_path"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                IUI <span class="text-red">*</span></label>
                                            <input
                                                class="form-control h-px-48  @error('iui_file_path') is-invalid @enderror"
                                                style="padding: 5px" type="file" id="iui_file_path"
                                                name="iui_file_path">

                                            @error('iui_file_path')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
                                            href="{{ route('login') }}" class="text-primary">Masuk</a></p>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
