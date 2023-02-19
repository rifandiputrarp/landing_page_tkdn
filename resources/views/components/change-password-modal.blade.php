<!-- Sign Up Modal -->
<div class="modal fade form-modal" id="changepassword" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog position-relative" style="max-width: 540px;">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10"
            data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div
            class="login-modal-main  bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-7 pb-13 overflow-hidden">
            <h3 class="font-size-7">Ubah Kata Sandi</h3>
            <p class=" mb-4 pb-5 font-size-4">Mohon isi data berikut dengan benar.</p>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('change-password.update', auth()->user()->id) }}">
                @csrf
                @method ('PATCH')
                <fieldset>
                    <div class="form-group">
                        <label for="current_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                            Sandi</label>
                        <div class="position-relative">
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password" placeholder="Masukkan sandi lama" name="current_password"
                                value="{{ old('current_password') }}">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="current_password"></a>

                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                            Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                id="new_password" placeholder="Masukkan sandi baru" name="new_password">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="new_password"></a>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_confirm_password"
                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Konfirmasi
                            Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password"
                                class="form-control @error('new_confirm_password') is-invalid @enderror"
                                id="new_confirm_password" placeholder="Konfirmasi kata sandi baru"
                                name="new_confirm_password">
                            <a class="show-password pos-abs-cr fas mr-6 text-black-2" style="cursor: pointer"
                                data-show-pass="new_confirm_password"></a>

                            @error('new_confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
