<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

            <div class="mb-6">
                <div class="row mb-6 align-items-center">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <h3 class="font-size-6 mb-0">Daftar Perusahaan</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-lg-end">
                            <div class="h-px-48 form-inline">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded" placeholder="Cari"
                                            aria-label="Search" aria-describedby="search-addon" name="keyword"
                                            id="keyword" value="{{ $search }}" style="height: 2.75rem;" />
                                    </div>
                                </form>

                                @if ($search)
                                    <a href="{{ route('companies.index') }}" class="ml-5 btn btn-danger"
                                        style="min-width: 50px">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-white shadow-8 pt-7 rounded pb-8 px-11">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">
                                        @sortablelink('status')</th>
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">Tanggal
                                        Registrasi
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"
                                        style="color: #6b6e6f">
                                        @sortablelink('name', 'Nama Perusahaan')
                                    </th>
                                    <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal">Aksi</th>
                                    {{-- <th scope="col" class="border-0 p-6 font-size-4 font-weight-normal"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
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

                        @if ($companies->isEmpty())
                            <h3 class="font-size-4 font-weight-normal text-black-2 text-center my-10">
                                Data belum tersedia
                            </h3>
                        @endif
                    </div>

                    <div class="pt-2">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
