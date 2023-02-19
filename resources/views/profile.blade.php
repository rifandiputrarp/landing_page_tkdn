<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="container">

                <div class="mb-15 mb-lg-23">
                    <div class="row">
                        <div class="col-xxxl-9 px-lg-13 px-6">

                            <!-- back Button -->
                            <div class="mb-9">
                                <a class="d-flex align-items-center" href="{{ route('home') }}"> <i
                                        class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
                                    </i><span
                                        class="text-uppercase font-size-3 font-weight-bold text-gray">Kembali</span></a>
                            </div>
                            <!-- back Button End -->

                            <div
                                class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                <!-- Session Status -->
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="mb-11 d-flex justify-content-between"
                                    style="border-bottom: 1px solid #e5e5e5">
                                    <h3 class="font-size-6 pb-2">
                                        Data Profil</h3>
                                    <a class="btn btn-info text-uppercase font-size-3" href="#" data-toggle="modal"
                                        data-target="#changepassword">
                                        <i class="mr-4 font-size-2 fas fa-lock"></i>Ubah Kata Sandi</a>
                                    </a>
                                </div>


                                @include('sweet::alert')

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                @foreach ($profiles as $profile)
                                    <form method="POST" action="{{ route('profile.update', $profile->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <fieldset>
                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama
                                                            Perusahaan</label>
                                                        <input id="name" name="name" type="text"
                                                            class="form-control h-px-48"
                                                            value="{{ old('name', $profile->name) }}" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="npwp"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                        <input id="npwp" name="npwp" type="text"
                                                            class="form-control h-px-48"
                                                            value="{{ old('npwp', $profile->npwp) }}" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="person_in_charge"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                            Jawab</label>
                                                        <input id="person_in_charge" name="person_in_charge" type="text"
                                                            class="form-control h-px-48"
                                                            value="{{ old('person_in_charge', $profile->person_in_charge) }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone_in_charge"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                        <input type="tel" class="form-control h-px-48"
                                                            id="phone_in_charge" name="phone_in_charge"
                                                            value="{{ old('phone_in_charge', $profile->phone_in_charge) }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-6 mb-xl-0 mb-7">
                                                    <div class="form-group">
                                                        <label for="email"
                                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="example@gmail.com" id="email" name="email"
                                                            value="{{ old('email', $profile->email) }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="business_capital"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                            Kategori Perusahaan
                                                        </label>
                                                        <select id="business_capital"
                                                            class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6"
                                                            name="business_capital">
                                                            <option value="">--</option>
                                                            @foreach (config('staticvalues.netWorth') as $netWorth)
                                                                <option
                                                                    {{ old('business_capital', $profile->business_capital) == $netWorth['value'] ? 'selected' : '' }}
                                                                    value="{{ $netWorth['value'] }}">
                                                                    {{ $netWorth['value'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-8">
                                                <div class="col-lg-12 mb-xl-0 mb-7">
                                                    <h3 class="text-black-2 font-size-4 font-weight-semibold mb-8">
                                                        Lampiran :</h3>

                                                    <div class="form-group mb-8">
                                                        <label for="npwp_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP
                                                        </label>
                                                        <input
                                                            class="form-control h-px-48 @error('npwp_file_path') is-invalid @enderror"
                                                            style="padding: 5px" type="file" id="npwp_file_path"
                                                            name="npwp_file_path">

                                                        @if ($profile->npwp_file_path)
                                                            <a href="{{ asset('storage/' . $profile->npwp_file_path) }}"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i>{{ $profile->npwp_file_path }}</a>
                                                        @endif

                                                        {{-- If user no update file --}}
                                                        <input type="text" class="form-control sr-only"
                                                            id="npwp_file_path" name="existed_npwp_file_path"
                                                            value="{{ $profile->npwp_file_path }}" multiple readonly>
                                                        {{-- End if user no update file --}}

                                                        @error('npwp_file_path')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-8">
                                                        <label for="iui_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">IUI</label>
                                                        <input
                                                            class="form-control h-px-48 @error('iui_file_path') is-invalid @enderror"
                                                            style="padding: 5px" type="file" id="iui_file_path"
                                                            name="iui_file_path">

                                                        @if ($profile->iui_file_path)
                                                            <a href="{{ asset('storage/' . $profile->iui_file_path) }}"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i>{{ $profile->iui_file_path }}</a>
                                                        @endif

                                                        {{-- If user no update file --}}
                                                        <input type="text" class="form-control sr-only"
                                                            id="iui_file_path" name="existed_iui_file_path"
                                                            value="{{ $profile->iui_file_path }}" multiple readonly>
                                                        {{-- End if user no update file --}}

                                                        @error('iui_file_path')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mb-8">
                                                        <label for="others_file_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                            Lainnya(Opsional)</label>
                                                        <input
                                                            class="form-control h-px-48 @error('others_file_path') is-invalid @enderror"
                                                            style="padding: 5px" type="file" id="others_file_path"
                                                            name="others_file_path">

                                                        @if ($profile->others_file_path)
                                                            <a href="{{ asset('storage/' . $profile->others_file_path) }}"
                                                                download class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i>{{ $profile->others_file_path }}</a>
                                                        @endif

                                                        {{-- If user no update file --}}
                                                        <input type="text" class="form-control sr-only"
                                                            id="others_file_path" name="existed_others_file_path"
                                                            value="{{ $profile->others_file_path }}" multiple
                                                            readonly>
                                                        {{-- End if user no update file --}}

                                                        @error('others_file_path')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="note"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan
                                                                    Admin</label>

                                                                <textarea name="note" id="note" cols="30" rows="7" disabled
                                                                    class="border border-mercury text-gray w-100 pt-4 pl-6">{{ $profile->note ? $profile->note : '-' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            {{-- Line Break --}}

                                            {{-- <h3 class="font-size-6 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                                Kata Sandi</h3> --}}


                                            <div class="form-group mb-8 py-4">
                                                <input type="submit" value="Simpan"
                                                    class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                            </div>
                                        </fieldset>
                                    </form>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
