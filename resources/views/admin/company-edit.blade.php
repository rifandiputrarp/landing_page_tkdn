<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="mb-6">
                <div class="mt-6">

                    <div class="container">

                        <div class="mb-15 mb-lg-10">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <h3 class="font-size-6 mb-8">Edit Registrasi</h3>
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">

                                        <h3 class="font-size-5 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                            Form
                                            Registrasi Perusahaan</h3>

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('companies.update', $company->id) }}"
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
                                                                value="{{ old('name', $company->name) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                            <input id="npwp" name="npwp" type="text"
                                                                class="form-control h-px-48"
                                                                value="{{ old('npwp', $company->npwp) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="person_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Penanggung
                                                                Jawab</label>
                                                            <input id="person_in_charge" name="person_in_charge"
                                                                type="text" class="form-control h-px-48"
                                                                value="{{ old('person_in_charge', $company->person_in_charge) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="phone_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                            <input type="tel" class="form-control h-px-48"
                                                                id="phone_in_charge" name="phone_in_charge"
                                                                value="{{ old('phone_in_charge', $company->phone_in_charge) }}"
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
                                                                value="{{ old('email', $company->email) }}" readonly>
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
                                                                        {{ old('business_capital', $company->business_capital) == $netWorth['value'] ? 'selected' : '' }}
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

                                                            @if ($company->npwp_file_path)
                                                                <a href="{{ asset('storage/' . $company->npwp_file_path) }}"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i>{{ $company->npwp_file_path }}</a>
                                                            @endif

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

                                                            @if ($company->iui_file_path)
                                                                <a href="{{ asset('storage/' . $company->iui_file_path) }}"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i>{{ $company->iui_file_path }}</a>
                                                            @endif

                                                            @error('iui_file_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        @if ($company->others_file_path)
                                                            <div class="form-group mb-8">
                                                                <label for="others_file_path"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                                    Lainnya</label>
                                                                <input
                                                                    class="form-control h-px-48 @error('others_file_path') is-invalid @enderror"
                                                                    style="padding: 5px" type="file"
                                                                    id="others_file_path" name="others_file_path">

                                                                @if ($company->others_file_path)
                                                                    <a href="{{ asset('storage/' . $company->others_file_path) }}"
                                                                        download
                                                                        class="font-size-2 font-weight-semibold"><i
                                                                            class="fas fa-file-pdf m-3"></i>{{ $company->others_file_path }}</a>
                                                                @endif

                                                                @error('others_file_path')
                                                                    <div class="alert alert-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        @endif


                                                    </div>
                                                </div>

                                                {{-- Line Break --}}

                                                <h3 class="font-size-6 pb-2 mb-11"
                                                    style="border-bottom: 1px solid #e5e5e5">
                                                    Status Verifikasi Data</h3>

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
                                                                    <option
                                                                        {{ old('status', $company->status) == $companyStatus['key'] ? 'selected' : '' }}
                                                                        value="{{ $companyStatus['key'] }}">
                                                                        {{ $companyStatus['value'] }}
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
                                                                value="{{ auth()->user()->name ? auth()->user()->name : 'Admin' }}"
                                                                placeholder="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="approved_at"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tanggal</label>
                                                            <input id="approved_at" name="approved_at" type="text"
                                                                class="form-control h-px-48"
                                                                value="{{ $current_date_time }}" placeholder=""
                                                                disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="note"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan</label>
                                                            <textarea name="note" id="note" cols="30" rows="7"
                                                                class="border border-mercury text-gray w-100 pt-4 pl-6">{{ old('note', $company->note) }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-8 py-4">
                                                    <input type="submit" value="Simpan"
                                                        class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">

                        
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-12 pb-13">

                                        <h3 class="font-size-5 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                            Form
                                            Registrasi Individu</h3>

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('companies.update', $company->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <fieldset>
                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="name"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NIK</label>
                                                            <input id="nik" name="nik" type="text"
                                                                class="form-control h-px-48"
                                                                value=""
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="person_in_charge"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama</label>
                                                            <input id="person_in_charge" name="person_in_charge"
                                                                type="text" class="form-control h-px-48"
                                                                value="{{ old('person_in_charge', $company->person_in_charge) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NPWP</label>
                                                            <input id="npwp" name="npwp" type="text"
                                                                class="form-control h-px-48"
                                                                value="{{ old('npwp', $company->npwp) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">No.Telepon</label>
                                                            <input id="telepon" name="telepon" type="text"
                                                                class="form-control h-px-48"
                                                                value=""
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group">
                                                            <label for="email"
                                                            class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                                            <input type="email" class="form-control"
                                                            placeholder="example@gmail.com" id="email" name="email"
                                                            value="{{ old('email', $company->email) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="product_qty"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Alamat</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-6">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="npwp_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload NPWP
                                                            </label>
                                                            <input
                                                                class="form-control h-px-48 @error('npwp_file_path') is-invalid @enderror"
                                                                style="padding: 5px" type="file" id="npwp_file_path"
                                                                name="npwp_file_path">

                                                            @if ($company->npwp_file_path)
                                                                <a href="{{ asset('storage/' . $company->npwp_file_path) }}"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i>{{ $company->npwp_file_path }}</a>
                                                            @endif

                                                            @error('npwp_file_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="iui_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload NIK</label>
                                                            <input
                                                                class="form-control h-px-48 @error('iui_file_path') is-invalid @enderror"
                                                                style="padding: 5px" type="file" id="iui_file_path"
                                                                name="iui_file_path">

                                                            @if ($company->iui_file_path)
                                                                <a href="{{ asset('storage/' . $company->iui_file_path) }}"
                                                                    download class="font-size-2 font-weight-semibold"><i
                                                                        class="fas fa-file-pdf m-3"></i>{{ $company->iui_file_path }}</a>
                                                            @endif

                                                            @error('iui_file_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    @if ($company->others_file_path)
                                                        <div class="form-group mb-6">
                                                            <label for="others_file_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">File
                                                                Lainnya</label>
                                                            <input
                                                                class="form-control h-px-48 @error('others_file_path') is-invalid @enderror"
                                                                style="padding: 5px" type="file"
                                                                id="others_file_path" name="others_file_path">

                                                            @if ($company->others_file_path)
                                                                <a href="{{ asset('storage/' . $company->others_file_path) }}"
                                                                    download
                                                                    class="font-size-2 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i>{{ $company->others_file_path }}</a>
                                                            @endif

                                                            @error('others_file_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="form-group mb-6 py-4">
                                                    <input type="submit" value="Simpan"
                                                        class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
