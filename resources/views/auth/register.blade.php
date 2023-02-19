<x-guest-layout>
    {{-- <x-header-section /> --}}
    <div class="mt-24" style="max-width: 768px; margin: 0 auto;">
        <div class="container">
            <div class="mb-15 mb-lg-23">
                <div class="row">
                    <div class="col-xxxl-9 px-lg-13 px-6">
                        <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-7 pb-13">
                            <h3 class="font-size-6 mb-4 pb-5">Registrasi Alumni</h3>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <fieldset>
                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="name"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama</label>
                                            <input type="text" class="form-control h-px-48" id="name" name="name"
                                                value="{{ old('name') }}" required autofocus>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="email"
                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Email</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com"
                                            id="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="nim"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NIM</label>
                                            <input type="text" class="form-control h-px-48" id="nim"
                                                placeholder="xx.xx.xxxx" name="nim" value="{{ old('nim') }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="faculty"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Fakultas</label>
                                            <select name="faculty" id="faculty"
                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4 mb-7">
                                                <option value="">--</option>
                                                <option value="Ilmu Komputer"
                                                    {{ old('faculty') == 'Ilmu Komputer' ? 'selected' : '' }}>
                                                    Ilmu Komputer</option>
                                                <option value="Bisnis dan Ilmu Sosial"
                                                    {{ old('faculty') == 'Bisnis dan Ilmu Sosial' ? 'selected' : '' }}>
                                                    Bisnis dan Ilmu Sosial</option>
                                            </select>
                                            </select>
                                            <span
                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                        </div>

                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="prodi"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Program
                                                Studi</label>
                                            <select name="prodi" id="prodi"
                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4 mb-7">
                                                <option value="">--</option>
                                                <option value="Informatika (S1)"
                                                    {{ old('prodi') == 'Informatika (S1)' ? 'selected' : '' }}>
                                                    Informatika (S1)</option>
                                                <option value="Sistem Informasi (S1)"
                                                    {{ old('prodi') == 'Sistem Informasi (S1)' ? 'selected' : '' }}>
                                                    Sistem Informasi (S1)</option>
                                                <option value="Teknologi Informasi (S1)"
                                                    {{ old('prodi') == 'Teknologi Informasi (S1)' ? 'selected' : '' }}>
                                                    Teknologi Informasi (S1)</option>

                                                <option value="Ilmu Komunikasi (S1)"
                                                    {{ old('prodi') == 'Ilmu Komunikasi (S1)' ? 'selected' : '' }}>
                                                    Ilmu Komunikasi (S1)</option>
                                                <option value="Bisnis Digital (S1)"
                                                    {{ old('prodi') == 'Bisnis Digital (S1)' ? 'selected' : '' }}>
                                                    Bisnis Digital (S1)</option>
                                            </select>
                                            </select>
                                            <span
                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="class_year"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tahun
                                                Angkatan</label>
                                            <select name="class_year" id="class_year"
                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4 mb-7">
                                                <option value="">--</option>
                                                @foreach (array_reverse(range(2009, 2021)) as $year)
                                                    <option {{ old('class_year') == $year ? 'selected' : '' }}>
                                                        {{ $year }}</option>
                                                @endforeach
                                            </select>
                                            <span
                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                        </div>
                                    </div>

                                    <div class="mb-8">
                                        <div class="form-group">
                                            <label for="graduate_year"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tahun
                                                Kelulusan</label>
                                            <select name="graduate_year" id="graduate_year"
                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4 mb-7">
                                                <option value="">--</option>
                                                @foreach (array_reverse(range(2009, 2021)) as $year)
                                                    <option {{ old('graduate_year') == $year ? 'selected' : '' }}>
                                                        {{ $year }}</option>
                                                @endforeach
                                            </select>
                                            <span
                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                        </div>
                                    </div>

                                    <div class="mb-xl-1">
                                        <div class="form-group">
                                            <label for="phone"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                            <input type="tel" class="form-control h-px-48" id="phone" name="phone"
                                                value="{{ old('phone') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                                            Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter password" name="password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                data-show-pass="password"></a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Konfirmasi
                                            Kata Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                placeholder="Enter password" name="password_confirmation">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                data-show-pass="password_confirmation"></a>
                                        </div>
                                    </div>


                                    <div class="form-group mb-8 py-4">
                                        <button
                                            class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Register</button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Sudah memiliki akun? <a
                                            href="{{ route('login') }}" class="text-primary">Login</a></p>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
