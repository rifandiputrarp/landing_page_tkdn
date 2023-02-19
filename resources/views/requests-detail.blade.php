<x-app-layout>
    <div class="bg-default-2 pt-16 pt-lg-22 pb-lg-27">
        <div class="container">
            <!-- back Button -->
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9 col-lg-8 mt-13 dark-mode-texts">
                    <div class="mb-9">
                        <a class="d-flex align-items-center ml-4" href="{{ url()->previous() }}"> <i
                                class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
                            </i><span class="text-uppercase font-size-3 font-weight-bold text-gray">Kembali</span></a>
                    </div>
                </div>
            </div>
            <!-- back Button End -->
            <div class="row justify-content-center">
                <!-- Company Profile -->
                <div class="col-12 col-xl-9 col-lg-8">
                    <div class="bg-white rounded-4 pt-11 shadow-9">

                        <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pb-13">
                            <h3 class="mb-4 pb-5 font-size-7">Detail Form Pengajuan</h3>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('requests.update', $request->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <fieldset>
                                    <div class="mb-10 col-md-2 pl-0">
                                        <div class="form-group">
                                            <label for="product_qty"
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jumlah
                                                Produk</label>
                                            <input type="number" class="form-control h-px-48" id="product_qty" min="1"
                                                oninput="genTable(this.value)" required autofocus readonly
                                                value="{{ old('product_qty', $request->product_qty) }}">
                                        </div>
                                    </div>

                                    <div class="mb-10">
                                        <div class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                            Rincian
                                            Produk</div>
                                        <tr>
                                            <td colspan="5">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr class="text-black-2 font-size-4 font-weight-semibold">
                                                            {{-- <th>No</th> --}}
                                                            <th>Nama/Jenis Produk</th>
                                                            <th>Tipe Produk</th>
                                                            <th>Spesifikasi Produk</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="produk">
                                                        @foreach ($product_data as $idx => $data)
                                                            <tr id="produk{{ $idx }}">
                                                                <td><input type="text" class="form-control"
                                                                        name="name[]"
                                                                        value="{{ old('name', $data->name) }}"
                                                                        required readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        name="product_type[]"
                                                                        value="{{ old('product_type', $data->product_type) }}"
                                                                        required readonly></td>
                                                                <td><input type="text" class="form-control"
                                                                        name="product_specification[]"
                                                                        value="{{ old('product_specification', $data->product_specification) }}"
                                                                        required readonly></td>

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
                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Lampiran</label>
                                            <ul>
                                                @if ($request->attachment_path != 'null')
                                                    @foreach (json_decode($request->attachment_path) as $key => $value)
                                                        <li>
                                                            <a href="{{ asset('storage/' . $value) }}" download
                                                                name="existed_attachment_path"
                                                                class="font-size-3 font-weight-semibold"><i
                                                                    class="fas fa-file-pdf m-3"></i>{{ $value }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>

                                        </div>
                                    </div>

                                    {{-- Line Break --}}

                                    <h3 class="font-size-6 pb-2 mb-11" style="border-bottom: 1px solid #e5e5e5">
                                        Status Verifikasi Permintaan</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-7">
                                            <div class="form-group">
                                                <label for="type_of_order"
                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">
                                                    Tipe Pengajuan
                                                </label>

                                                @if (!$request->type_of_order)
                                                    <div class="pl-6">-</div>
                                                @else
                                                    @foreach (config('staticvalues.typeOfOrder') as $value)
                                                        <div
                                                            class="form-check form-check-inline text-black-2 font-size-4">
                                                            <input class="form-check-input" type="radio" readonly
                                                                name="type_of_order" id="{{ $value['key'] }}"
                                                                value="{{ $value['key'] }}"
                                                                {{ old('type_of_order', $request->type_of_order) == $value['key'] ? 'checked' : 'disabled' }}>
                                                            <label class="form-check-label"
                                                                for="type_of_order">{{ $value['value'] }}</label>
                                                        </div>
                                                    @endforeach
                                                @endif


                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="note"
                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Catatan</label>

                                                <textarea name="note" id="note" cols="30" rows="7" disabled
                                                    class="border border-mercury text-gray w-100 pt-4 pl-6">{{ $request->note ? $request->note : '-' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Company Profile End -->
            </div>
        </div>
    </div>
</x-app-layout>
