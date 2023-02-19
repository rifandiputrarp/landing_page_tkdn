<x-guest-layout>
    {{-- For Mobile version --}}
    <div class="mobile-version">
        <div style="margin: 0 auto;" class=" py-6 px-lg-13 px-6">
            <img src="/image/white_logo.png" alt="Sucofindo Logo" height="100">
        </div>
        <div style="max-width: 600px; margin: 0 auto;">
            <img class="auth-circle" src="https://dashboard.prakerja.go.id/assets/v2/images/auth-bg.svg" alt="">

            <div class="container">
                <div class="mb-15 mb-lg-23">
                    <div class="row">
                        <div class="col-xxxl-12 px-lg-13 px-6">

                            <div
                                class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">
                                <h3>Masuk Akun</h3>
                                <p class="font-size-4">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

                                <!-- Session Status -->
                                @if (session('status'))
                                    <div class="alert alert-success mb-8" role="alert">
                                        <x-auth-session-status :status="session('status')" />
                                    </div>
                                @endif

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                        <input type="email" class="form-control" placeholder="example@gmail.com"
                                            id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                                            Sandi</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Kata sandi" name="password">
                                            <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                data-show-pass="password"></a>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between">
                                        <label for="remember_me" class="gr-check-input d-flex  mr-3">
                                            <input class="d-none" type="checkbox" id="remember_me"
                                                name="remember">
                                            <span class="checkbox mr-5"></span>
                                            <span class="font-size-3 line-height-reset mb-1 d-block"
                                                style="user-select: none;">Remember Me</span>
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="font-size-3 text-dodger line-height-reset">Lupa kata sandi?</a>
                                        @endif

                                    </div>
                                    <div class="form-group mb-8">
                                        <button
                                            class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Masuk</button>
                                    </div>
                                    <p class="font-size-4 text-center heading-default-color">Belum Memiliki Akun? <a
                                            href="{{ route('register-company') }}" class="text-primary font-semibold">
                                            <u>Daftar</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End for mobile version --}}


    {{-- Desktop version --}}
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-9 col-lg-8 col-md-7 p-0 frame-left" style="background-color: white">
                    <div class="d-flex" style="height: 100vh">
                        <img src="{{ asset('image/bg-login.png') }}" alt="Sucofindo Logo" style="width: 100%">
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-5 p-0 frame-right" style="background-color: white;">
                    <div class="header-login-logo" style="height: 13.31vh">
                    </div>
                    <div class="contact-form shadow-8 pl-sm-6 pl-2 pr-sm-9 pr-2 pt-8 pb-13">
                        <h4>Masuk Akun</h4>
                        <p class="font-size-3">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</p>

                        <!-- Session Status -->
                        @if (session('status'))
                            <div class="alert alert-success mb-8" role="alert">
                                <x-auth-session-status :status="session('status')" />
                            </div>
                        @endif

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"
                                    class="font-size-3 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="password"
                                    class="font-size-3 text-black-2 font-weight-semibold line-height-reset">Kata
                                    Sandi</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" placeholder="Kata sandi"
                                        name="password">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <label for="remember_me" class="gr-check-input d-flex  mr-3">
                                    <input class="d-none" type="checkbox" id="remember_me" name="remember">
                                    <span class="checkbox mr-5"></span>
                                    <span class="font-size-3 line-height-reset mb-1 d-block"
                                        style="user-select: none;">Remember Me</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="font-size-3 text-dodger line-height-reset">Lupa kata sandi?</a>
                                @endif

                            </div>
                            <div class="form-group mb-6">
                                <button style="height: 45px"
                                    class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Masuk</button>
                            </div>
                            <p class="font-size-3 text-center heading-default-color">Belum Memiliki Akun? <a
                                    href="{{ route('register-company') }}" class="text-primary font-semibold">
                                    <u>Daftar</u></a></p>
                        </form>

                        {{-- <div class="contact-person">
                            <div class="font-size-3 text-black-2 line-height-1p4">
                                Untuk Informasi Lebih Lanjut Bisa Menghubungi :
                                <ul>
                                    <li>Nano Suprayogi (08174833612 / nano.suprayogi@sucofindo.co.id)</li>
                                    <li>Johan Permana (081294570241 / johan.tkdn@gmail.com)</li>
                                    <li>Fazri Faturrahman (081299437108 / fazri.tkdn@gmail.com)</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End desktop version --}}

</x-guest-layout>
