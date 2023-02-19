<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="mb-6">
                <div class="mt-6">
                    <div class="container">
                        <div class="mb-15 mb-lg-23">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <h3 class="font-size-7">Edit Form Pengajuan</h3>
                                    <p class=" mb-4 pb-5 font-size-4">Mohon isi data berikut dengan benar.</p>
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Sorry !</strong> There were some problems with your
                                                input.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('requests.update', $request->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <fieldset>
                                                <div class="mb-8 col-md-2 pl-0">
                                                    <div class="form-group">
                                                        <label for="product_qty"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jumlah
                                                            Produk</label>
                                                        <input type="number" class="form-control h-px-48"
                                                            id="product_qty" min="1" oninput="genTable(this.value)"
                                                            required autofocus readonly
                                                            value="{{ old('product_qty', $request->product_qty) }}">
                                                    </div>
                                                </div>

                                                <div class="mb-8">
                                                    <div
                                                        class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                        Rincian
                                                        Produk</div>

                                                    @if (auth()->user()->role == 'company')
                                                        <div class="row mb-8" style="margin-top:10px;">
                                                            <div class="col-md-4">
                                                                <input type="number" id="add_produk"
                                                                    class="form-control" min="1">
                                                            </div>
                                                            <div class="col-md-2" style="display:flex">
                                                                <button type="button" class="btn btn-success h-px-48"
                                                                    name="add" onclick="genTableEdit()"
                                                                    style="align-self:end;">
                                                                    Tambah
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <tr>
                                                        <td colspan="5">
                                                            <table class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr
                                                                        class="text-black-2 font-size-4 font-weight-semibold">
                                                                        {{-- <th>No</th> --}}
                                                                        <th>Nama/Jenis Produk</th>
                                                                        <th>Tipe Produk</th>
                                                                        <th>Spesifikasi Produk</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="produk">
                                                                    @foreach ($product_data as $idx => $data)
                                                                        <tr id="produk{{ $idx }}">
                                                                            <td><input type="text"
                                                                                    class="form-control" name="name[]"
                                                                                    value="{{ old('name', $data->name) }}"
                                                                                    required></td>
                                                                            <td><input type="text"
                                                                                    class="form-control"
                                                                                    name="product_type[]"
                                                                                    value="{{ old('product_type', $data->product_type) }}"
                                                                                    required></td>
                                                                            <td><input type="text"
                                                                                    class="form-control"
                                                                                    name="product_specification[]"
                                                                                    value="{{ old('product_specification', $data->product_specification) }}"
                                                                                    required></td>
                                                                            <td>
                                                                                <button type="button"
                                                                                    class="btn btn-danger" name="add"
                                                                                    value="{{ $idx }}"
                                                                                    onclick="removeTableEdit(this)"
                                                                                    style="min-width: 50px;">
                                                                                    <i class="fas fa-trash"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>

                                                            </table>

                                                        </td>
                                                    </tr>
                                                </div>

                                                <div class="mb-10">
                                                    <div class="form-group">
                                                        <label for="attachment_path"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                            File </label>

                                                        <ul>
                                                            @if ($request->attachment_path != NULL)
                                                                @foreach (json_decode($request->attachment_path) as $key => $value)
                                                                    <li>
                                                                        <a href="{{ asset('storage/' . $value) }}"
                                                                            download name="existed_attachment_path"
                                                                            class="font-size-2 font-weight-semibold"><i
                                                                                class="fas fa-file-pdf m-3"></i>{{ $value }}</a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>

                                                        {{-- If user no update file --}}
                                                        <input type="text" class="form-control sr-only"
                                                            id="attachment_path" name="existed_attachment_path"
                                                            value="{{ $request->attachment_path }}" multiple
                                                            readonly>

                                                        <input type="text" class="form-control sr-only"
                                                            id="attachment_path" name="existed_sertificate_path"
                                                            value="{{ $request->sertificate_path }}" multiple
                                                            readonly>
                                                        {{-- End if user no update file --}}

                                                        <div class="input-group control-group increment">
                                                            <input type="file" name="attachment_path[]"
                                                                class="form-control h-px-48 @error('attachment_path') is-invalid @enderror"
                                                                style="padding: 5px" id="attachment_path">

                                                            @error('attachment_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-success h-px-48 ml-5 add-file"
                                                                    type="button" style="min-width: 90px;"><i
                                                                        class="glyphicon glyphicon-plus fas fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="clone hide">
                                                            <div class="control-group input-group"
                                                                style="margin-top:10px">
                                                                <input type="file" name="attachment_path[]"
                                                                    class="form-control h-px-48 @error('attachment_path') is-invalid @enderror"
                                                                    style="padding: 5px" id="attachment_path">
                                                                @error('attachment_path')
                                                                    <div class="alert alert-danger">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                                <div class="input-group-btn">
                                                                    <button
                                                                        class="btn btn-danger h-px-48 ml-5 remove-file"
                                                                        type="button" style="min-width: 90px;"><i
                                                                            class="glyphicon glyphicon-remove fas fa-minus"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Line Break --}}

                                                @if (auth()->user()->role == 'admin')

                                                    <h3 class="font-size-6 pb-2 mb-11"
                                                        style="border-bottom: 1px solid #e5e5e5">
                                                        Status Verifikasi Permintaan</h3>

                                                    <div class="row">
                                                        <div class="col-md-6 mb-7">
                                                            <div class="form-group">
                                                                <label for="type_of_order"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                                    Tipe Pengajuan
                                                                </label>

                                                                @foreach (config('staticvalues.typeOfOrder') as $value)
                                                                    <div
                                                                        class="form-check form-check-inline text-black-2 font-size-4">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="type_of_order"
                                                                            id="{{ $value['key'] }}"
                                                                            value="{{ $value['key'] }}"
                                                                            {{ old('type_of_order', $request->type_of_order) == $value['key'] ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="type_of_order">{{ $value['value'] }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="note"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan</label>
                                                                <textarea name="note" id="note" cols="30" rows="7"
                                                                    class="border border-mercury text-gray w-100 pt-4 pl-6">{{ old('note', $request->note) }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4 mb-xl-0 mb-7">
                                                            <div class="form-group">
                                                                <label for="request_status"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                                    Status Permohonan
                                                                </label>
                                                                <select id="request_status"
                                                                    class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4 mb-6"
                                                                    name="request_status">
                                                                    <option value="">--</option>
                                                                    @foreach (config('staticvalues.companyStatus') as $companyStatus)
                                                                        <option
                                                                            {{ old('status', $request->request_status) == $companyStatus['key'] ? 'selected' : '' }}
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

                                                    <div class="mb-xl-1">
                                                        <div class="form-group">
                                                            <label for="sertificate_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Upload
                                                                Sertifikat</label>
                                                            @if ($request->sertificate_path)
                                                                <ul>
                                                                    <li>
                                                                        <a href="{{ asset('storage/' . $request->sertificate_path) }}"
                                                                            download
                                                                            class="font-size-3 font-weight-semibold"><i
                                                                                class="fas fa-file-pdf mr-3"></i>Sertifikat</a>
                                                                    </li>
                                                                </ul>
                                                            @endif
                                                            <input
                                                                class="form-control h-px-48 @error('sertificate_path') is-invalid @enderror"
                                                                style="padding: 5px" type="file" id="sertificate_path"
                                                                name="sertificate_path">
                                                            <div class="text-warning font-size-3">
                                                                Silahkan upload Sertifikat TKDN jika sudah memilih
                                                                status
                                                                <strong>"COMPLETE"</strong>
                                                            </div>
                                                            @error('sertificate_path')
                                                                <div class="alert alert-danger">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                @endif



                                                <div class="form-group mb-8">
                                                    <button
                                                        class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Kirim</button>
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
    </div>
</x-app-layout>
