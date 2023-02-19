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
                        <div class="d-xs-flex align-items-center pl-xs-12 mb-8 text-center text-xs-left">
                            <a class="mr-xs-7 mb-5 mb-xs-0" href="#">
                                <img class="square-100 rounded-6" src="{{ asset('image/company.png') }}"
                                    alt="Company Images Preview">
                            </a>
                            <div class="">
                                <h2 class="mt-xs-n5">
                                    <a class="font-size-6 text-black-2 font-weight-semibold"
                                        href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
                                </h2>
                                <span class="mb-0 text-gray font-size-4"> NPWP : {{ $company->npwp }}</span>
                            </div>
                        </div>
                        <!-- Tab Section Start -->
                        <div class="nav border-bottom border-mercury pl-12">
                        </div>
                        <!-- Tab Content -->
                        <div class="tab-content pl-12 pt-10 pb-7 pr-12 pr-xxl-12" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Middle Body Start -->
                                <div class="row">
                                    <!-- Single Widgets Start -->
                                    <div class="col-12 col-lg-4 col-md-4 col-xs-6">
                                        <div class="mb-8">
                                            <p class="font-size-4">Penanggung Jawab</p>
                                            <h5 class="font-size-4 font-weight-semibold text-black-2">
                                                {{ $company->person_in_charge }}</h5>
                                        </div>
                                        <div class="mb-8">
                                            <p class="font-size-4">Telepon</p>
                                            <h5 class="font-size-4 font-weight-semibold text-black-2">
                                                {{ $company->phone_in_charge }}</h5>
                                        </div>
                                    </div>
                                    <!-- Single Widgets End -->
                                    <!-- Single Widgets Start -->
                                    <div class="col-12 col-lg-4 col-md-4 col-xs-6">
                                        <div class="mb-8">
                                            <p class="font-size-4">email</p>
                                            <h5 class="font-size-4 font-weight-semibold text-black-2">
                                                {{ $company->email }}</h5>
                                        </div>
                                        <div class="mb-8">
                                            <p class="font-size-4">File</p>
                                            <div class="flex">
                                                <span class="mr-6">
                                                    @if ($company->npwp_file_path)
                                                        <a href="{{ asset('storage/' . $company->npwp_file_path) }}"
                                                            download class="font-size-4 font-weight-semibold"><i
                                                                class="fas fa-file-pdf mr-3"></i>NPWP</a>
                                                    @endif
                                                </span>

                                                <span class="mr-6">
                                                    @if ($company->iui_file_path)
                                                        <a href="{{ asset('storage/' . $company->iui_file_path) }}"
                                                            download class="font-size-4 font-weight-semibold"><i
                                                                class="fas fa-file-pdf mr-3"></i>IUI</a>
                                                    @endif
                                                </span>
                                                <span>
                                                    @if ($company->others_file_path)
                                                        <a href="{{ asset('storage/' . $company->others_file_path) }}"
                                                            download class="font-size-4 font-weight-semibold"><i
                                                                class="fas fa-file-pdf mr-3"></i>OTHER</a>
                                                    @endif
                                                </span>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- Single Widgets End -->
                                    <!-- Single Widgets Start -->
                                    <div class="col-12 col-lg-4 col-md-4 col-xs-6">
                                        <div class="mb-8">
                                            <p class="font-size-4">Kategori Perusahaan</p>
                                            <div class="font-size-4 font-weight-semibold text-black-2">
                                                {{ $company->business_capital }}
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="font-size-4">Status</p>
                                            <span
                                                style="background: @if ($company->status == 'new') #ff0027 @elseif ($company->status == 'review') #ffad00 @else #46c900 @endif;"
                                                class="font-size-3 min-width-px-135 text-uppercase text-center rounded-sm font-weight-semibold text-white mb-0">
                                                {{ $company->status }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Widgets End -->
                                    <!-- Single Widgets Start -->
                                    <div class="col-12 col-lg-4 col-md-4 col-xs-6">

                                    </div>
                                    <!-- Single Widgets End -->
                                    <!-- Single Widgets Start -->
                                    <div class="col-12 col-lg-12 col-md-12 col-xs-6">
                                        <div class="mb-8">
                                            <p class="font-size-4">Catatan</p>
                                            <p class="font-size-4 mb-8">
                                                @if ($company->note)
                                                    @nl2br($company->note)
                                                @else
                                                    -
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Single Widgets End -->
                                </div>
                                <!-- Middle Body End -->
                            </div>
                        </div>
                        <!-- Tab Content End -->
                        <!-- Tab Section End -->
                    </div>
                </div>
                <!-- Company Profile End -->
            </div>
        </div>
    </div>
</x-app-layout>
