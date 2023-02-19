<x-guest-layout>
    <div style="margin: 0 auto;" class="py-6 px-lg-13 px-6">
        <a href="{{ route('login') }}">
            <img src="/image/white_logo.png" alt="Sucofindo Logo" height="100">
        </a>
    </div>


    <section style="max-width: 600px; margin: 0 auto;" class="bg-soft d-flex">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow border-0 rounded p-4 p-lg-6 w-100 fmxw-500">

                        <h3>Lupa kata sandi?</h3>
                        <p class="font-size-4">Cukup beri tahu kami alamat email
                            Anda dan kami akan mengirim email kepada Anda tautan pengaturan ulang kata sandi yang
                            memungkinkan Anda memilih yang baru.</p>

                        <!-- Session Status -->
                        @if (session('status'))
                            <div class="alert alert-info mb-8" role="alert">
                                <x-auth-session-status :status="session('status')" />
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <div class="form-group">
                                <label for="email"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email"
                                    name="email">
                            </div>

                            <div class="form-group mb-8">
                                <button
                                    class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">{{ __('Email Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
