<x-app-layout>
    <div class="dashboard-main-container mt-25 mt-lg-31" id="dashboard-body">
        <div class="container">
            <div class="row mb-7">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-sm-6">
                    <div class="media bg-white rounded-4 pl-8 pt-9 pb-9 pr-7 hover-shadow-1 mb-9 shadow-8">
                        <div class="text-green bg-green-opacity-1 circle-56 font-size-6 mr-7">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="">
                            <h5
                                class="font-size-8 font-weight-semibold text-black-2 line-height-reset font-weight-bold mb-1">
                                <span class="counter">{{ $companyCount }}</span>
                            </h5>
                            <p class="font-size-4 font-weight-normal text-gray mb-0">Perusahaan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-14">
                <div class="row mb-11 align-items-center">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <h3 class="font-size-6 mb-0">Perusahaan Baru ({{ $newCompanies->count() }})</h3>
                    </div>
                </div>
                <div class="bg-white shadow-8 pt-7 rounded pb-8 px-11">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">
                                        Status</th>
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">Tanggal
                                        Registrasi
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"
                                        style="color: #6b6e6f">
                                        Nama Perusahaan
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">Aksi</th>
                                    {{-- <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($newCompanies as $company)
                                    <tr class="border border-color-2">
                                        <th scope="row" class="px-6 min-width-px-135 border-0 pr-0"
                                            style="vertical-align: middle">
                                            <h3 style="background: @if ($company->status == 'new') #ff0027 @elseif ($company->status == 'review') #ffad00 @else #46c900 @endif;"
                                                class="font-size-3 text-uppercase text-center rounded-sm font-weight-semibold text-white mb-0">
                                                {{ $company->status }}
                                            </h3>
                                        </th>
                                        <td class="table-y-middle px-6 min-width-px-170 pr-0">
                                            <h3 class="font-size-4 font-weight-normal text-black-2 mb-0">
                                                {{ $company->created_at->format('d/m/Y') }}
                                            </h3>
                                        </td>
                                        <td class="table-y-middle px-6 min-width-px-170 pr-0">
                                            <a href="{{ route('companies.show', $company->id) }}"
                                                class="media min-width-px-235 align-items-center">
                                                <h4 class="font-size-4 mb-0 font-weight-semibold text-black-2">
                                                    {{ $company->name }}</h4>
                                            </a>
                                        </td>
                                        {{-- <td class="table-y-middle px-6 pr-0">
                                            <div class=""><a
                                                    href="{{ route('companies.show', $company->id) }}"
                                                    class="font-size-3 font-weight-bold text-uppercase"
                                                    style="color: green;">Lihat</a></div>
                                        </td> --}}
                                        <td class="table-y-middle px-6 pr-0">
                                            <div class=""><a
                                                    href="{{ route('companies.edit', $company->id) }}"
                                                    class="font-size-3 font-weight-bold text-blue-2 text-uppercase">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>

                        @if ($newCompanies->isEmpty())
                            <h3 class="font-size-4 font-weight-normal text-black-2 text-center my-10">
                                Data belum tersedia
                            </h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
