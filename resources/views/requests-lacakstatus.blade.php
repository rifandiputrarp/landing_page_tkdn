{{-- @php
    dd($getDataOC);
@endphp --}}
<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="mb-6">
                <div class="mt-6">
                    <div class="container">
                        <div class="mb-15 mb-lg-23">
                            <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-5 pb-13">
                                <div class="table-responsive">
                                    <h3 class="font-size-7">Lacak Status Pengajuan Sertifikat</h3>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nomor Pengajuan</th>
                                                <td>{{ $product_request['request_number'] }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Pengajuan</th>
                                                <td>{{ $product_request['request_date'] }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Surat Permohonan</th>
                                                <td>
                                                    <a class="btn btn-primary" href="/storage/{{ $product_request->surat_permohonan_path }}" target="_blank">
                                                        <i class="fa fa-download"></i>
                                                        &nbsp;Lihat Surat Permohonan
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lampiran Permohonan</th>
                                                <td>
                                                    <a class="btn btn-success" href="/storage/{{ $product_request->lampiran_permohonan_path }}" target="_blank">
                                                        <i class="fas fa-file"></i>
                                                        &nbsp;Lihat Lampiran Permohonan
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Barang Diajukan</th>
                                                <td>{{ $product_request['product_qty'] }} Barang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr style="margin-top: -1%">
                                </div>
                                
                                <br>

                                <div class="accordion" id="accordionExample">
                                    <div class="card">

                                      <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                          <button class="btn btn-block font-size-5 font-weight-bold text-left text-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Barang Yang Diajukan
                                          </button>
                                        </h5>
                                      </div>
                                  
                                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="col-md-12 table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th class="text-dark">Nama / Jenis Produk</th>
                                                            <th class="text-dark">Tipe Produk</th>
                                                            <th class="text-dark">Spesifikasi Produk</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($product_data as $product)
                                                            <tr>
                                                                <td>{{ $product->name }}</td>
                                                                <td>{{ $product->product_specification }}</td>
                                                                <td>{{ $product->product_type }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                      </div>

                                    </div>
                                </div>

                                <br>
                                <br>

                                <h3 class="font-size-7">Status Sertifikat</h3>
                                <hr>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        @if(@$getDataOC[0]->status == NULL || @$getDataOC[0]->status == 0)
                                            <p class="col-md-6"><i class="fas fa-clock"></i>Menunggu Konfirmasi Order <i class="fas fa-arrow-turn-down"></i></p>
                                        @else
                                            <p class="font-weight-bold" style="color:green;"><i class="fas fa-check"></i> Order di Konfirmasi!</p>
                                            <ul style="color:green;"> <strong> &rarrhk; Tanggal Konfirmasi Order: {{ @$getDataOC[0]->tanggal_approve }} </strong> </ul>
                                        @endif
                                        <br>
                                        @if (isset($getDataPenugasan[0]) == FALSE)
                                            <p><i class="fas fa-clock"></i> Menunggu Penugasan Verifikasi</p>
                                        @else
                                            <p class="font-weight-bold" style="color:green;"><i class="fas fa-check"></i> Penugasan Sudah Dibuat! </p>
                                            <ul style="color:green;"> <strong> &rarrhk; Berikut Rinciannya </strong> </ul>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <th class="text-dark">Jenis Produk</th>
                                                    <th class="text-dark">Tipe</th>
                                                    <th class="text-dark">Spesifikasi</th>
                                                    <th class="text-dark">Merek</th>
                                                    <th class="text-dark">Tanggal Penugasan</th>
                                                </thead>
                                                <tbody>
                                                    @foreach (@$getDataBarangPenugasan as $item)
                                                    <tr>
                                                        <td>{{ @$item->jenis_produk }}</td>
                                                        <td>{{ @$item->tipe }}</td>
                                                        <td>{{ @$item->spesifikasi }}</td>
                                                        <td>{{ @$item->merk }}</td>
                                                        @for ($i = 0; $i < count(@$getDataPenugasan); $i++)
                                                            @if (@$getDataPenugasan[$i]->id == $item->penugasan_id)
                                                                <td>{{ @$getDataPenugasan[$i]->tgl_mulai }} s.d. {{ @$getDataPenugasan[$i]->tgl_akhir }}</td>
                                                            @endif
                                                        @endfor
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                        <br>
                                        @if($tanggalPenugasan != NULL)
                                            @if (date('Y-m-d') <= min(@$tanggalPenugasan))
                                                <p><i class="fas fa-clock"></i> Sedang Melakukan Verifikasi</p>
                                            @else
                                                <p class="font-weight-bold" style="color:green;"><i class="fas fa-check"></i> Salah Satu Verifikasi Lapangan Telah Selesai</p>
                                                <ul style="color:green;"> <strong> &rarrhk; Berikut Rinciannya </strong> </ul>
                                                <table class="table table-responsive">
                                                    <thead>
                                                        <th class="text-dark" style="text-align: center">Jenis Produk</th>
                                                        <th class="text-dark" style="text-align: center">Tipe</th>
                                                        <th class="text-dark" style="text-align: center">Spesifikasi</th>
                                                        <th class="text-dark" style="text-align: center">Merek</th>
                                                        <th class="text-dark" style="text-align: center">Kelengkapan Dokumen</th>
                                                        <th class="text-dark" style="text-align: center">Capaian TKDN</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (@$getDataBarangPenugasan as $item)
                                                        <tr>
                                                            <td>{{ $item->jenis_produk }}</td>
                                                            <td>{{ $item->tipe }}</td>
                                                            <td>{{ $item->spesifikasi }}</td>
                                                            <td>{{ $item->merk }}</td>
                                                            @if (@$item->kelengkapan_dokumen == NULL)
                                                                <td>
                                                                    <p class="font-weight-bold" style="color:red"> X Belum Lengkap</p>
                                                                </td>
                                                            @else
                                                            <td>
                                                                <p class="font-weight-bold" style="color:green; text-align:center;"> <i class="fas fa-check"></i> Sudah Lengkap</p>
                                                            </td>
                                                            @endif
                                                            @if (@$item->capaian_tkdn == NULL)
                                                                <td>
                                                                    <p style="text-align: center; color:darkorange" class="font-weight-bold"> <i class="fas fa-exclamation"></i> Sedang Dalam Perhitungan</p>
                                                                </td>
                                                            @else
                                                                <td style="text-align: center; color:green" class="font-weight-bold" >{{ $item->capaian_tkdn }}%</td>
                                                            @endif
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        @endif
                                        {{-- <p>Pembuatan Laporan & Sertifikasi</p> --}}
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
