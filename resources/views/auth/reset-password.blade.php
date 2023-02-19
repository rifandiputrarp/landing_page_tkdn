<x-guest-layout>

    <div style="margin: 0 auto;" class="py-6 px-lg-13 px-6">
        <a href="{{ route('login') }}">
            <img src="/image/white_logo.png" alt="Sucofindo Logo" height="100">
        </a>
    </div>

    <section class="bg-soft d-flex align-items-center" style="max-width: 600px; margin: 0 auto;">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Reset password</h1>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label for="email"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" placeholder="example@gmail.com"
                                    class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                    value="{{ old('email') }}">
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
                                    <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
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
                                    <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                        data-show-pass="password_confirmation"></a>
                                </div>
                            </div>
                            <div class="form-group mb-8 py-4">
                                <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">
                                    Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
