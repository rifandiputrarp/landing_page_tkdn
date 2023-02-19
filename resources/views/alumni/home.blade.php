<x-app-layout>
    <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-5 col-xs-8">
                    <!-- Sidebar Start -->
                    <div class="widgets mb-11">
                        <h4 class="font-size-6 font-weight-semibold mb-6">Jenis Pekerjaan</h4>
                        <ul class="list-unstyled filter-check-list">
                            <li class="mb-2"><a href="#" class="toggle-item">Penuh Waktu</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Paruh Waktu</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Kontrak</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Magang</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Sementara</a></li>
                        </ul>
                    </div>
                    <div class="widgets mb-11 ">
                        <div class="d-flex align-items-center pr-15 pr-xs-0 pr-md-0 pr-xl-22">
                            <h4 class="font-size-6 font-weight-semibold mb-6 w-75">Kisaran Gaji</h4>
                            <!-- Range Slider -->
                            <div class="slider-price w-25 text-right mr-7">
                                <p class="font-weight-bold">
                                    <input class="text-primary font-weight-semibold font-size-4 focus-reset" type="text"
                                        id="amount" readonly="">
                                </p>
                            </div>
                        </div>
                        <div class="graph text-center mx-0 mt-5 position-relative chart-postion">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="range-slider">
                            <div class="pm-range-slider"></div>
                        </div>
                    </div>
                    <div class="widgets mb-11">
                        <h4 class="font-size-6 font-weight-semibold mb-6">Jenjang Karir </h4>
                        <ul class="list-unstyled filter-check-list">

                            <li class="mb-2"><a href="#" class="toggle-item">Senior</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Middle</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Junior</a></li>
                        </ul>
                    </div>
                    <div class="widgets mb-11">
                        <h4 class="font-size-6 font-weight-semibold mb-6">Posted Time</h4>
                        <ul class="list-unstyled filter-check-list">
                            <li class="mb-2"><a href="#" class="toggle-item">Anytime</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Last day</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Last 3 days</a></li>
                            <li class="mb-2"><a href="#" class="toggle-item">Last week</a></li>
                        </ul>
                    </div>
                    <!-- Sidebar End -->
                </div>
                <!-- Main Body -->
                <div class="col-12 col-xl-8 col-lg-8">
                    <!-- form -->
                    <form method="GET" action="{{ route('home') }}" class="search-form">
                        <div
                            class="filter-search-form-2 search-1-adjustment bg-white rounded-sm shadow-7 pr-6 py-6 pl-6">
                            <div class="filter-inputs">
                                <div class="form-group position-relative w-lg-45 w-xl-40 w-xxl-45">
                                    <input class="form-control focus-reset pl-13" type="text" id="search" name="search"
                                        placeholder="UI Designer" value="{{ request('search') }}" required>
                                    <span
                                        class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                                        <i class="icon icon-zoom-2 text-primary font-weight-bold"></i>
                                    </span>
                                </div>
                                <!-- .select-city starts -->
                                <div class="form-group position-relative w-lg-55 w-xl-60 w-xxl-55">
                                    <select name="location" id="location"
                                        class="nice-select font-size-4 pl-13 h-100 arrow-3">
                                        <option value="" data-display="Jakarta">Kota</option>
                                        @foreach ($locations as $loc)
                                            <option {{ request('location') == $loc ? 'selected' : '' }}
                                                value="{{ $loc }}">{{ $loc }}</option>
                                        @endforeach
                                    </select>
                                    <span
                                        class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                                        <i class="icon icon-pin-3 text-primary font-weight-bold"></i>
                                    </span>
                                </div>
                                <!-- ./select-city ends -->
                            </div>
                            <div class="button-block">
                                <button
                                    class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Cari</button>
                            </div>
                        </div>
                    </form>
                    <div class="pt-12">
                        <div class="d-flex align-items-center justify-content-between mb-6">
                            @if (request()->has('search'))
                                <h5 class="font-size-4 font-weight-normal text-gray">
                                    <span class="heading-default-color">{{ $results->total() }}</span>
                                    hasil untuk "<span class="heading-default-color">{{ request('search') }}</span>"
                                </h5>
                            @endif
                        </div>
                        @foreach ($results as $job)
                            <div class="mb-8">
                                <!-- Single Featured Job -->
                                <div
                                    class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="media align-items-center">
                                                <div class="square-72 d-block mr-8">
                                                    <img src="/image/l2/png/featured-job-logo-1.png" alt="">
                                                </div>
                                                <div>
                                                    <h3 class="mb-0"><a
                                                            class="font-size-6 heading-default-color"
                                                            href="{{ route('job-posts.show', $job->id) }}">{{ $job->title }}</a>
                                                    </h3>
                                                    <a href="#"
                                                        class="font-size-3 text-default-color line-height-2">{{ $job->company->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right pt-7 pt-md-5">
                                            <div class="media justify-content-md-end">
                                                <div class="image mr-5 mt-2">
                                                    <img src="/image/svg/icon-fire-rounded.svg" alt="">
                                                </div>
                                                <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span
                                                        class="text-black-2">{{ $job->salary }}</span> IDR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-8">
                                        <div class="col-md-7">
                                            <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                                @foreach (explode(',', $job->technical_skills) as $technical_skill)
                                                    <li>
                                                        <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2"
                                                            href="#">{{ $technical_skill }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <ul
                                                class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                                <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img
                                                            src="/image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                                    <span class="font-weight-semibold">{{ $job->location }}</span>
                                                </li>
                                                <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img
                                                            src="/image/svg/icon-suitecase.svg" alt=""></span>
                                                    <span class="font-weight-semibold">{{ $job->type }}</span>
                                                </li>
                                                <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                    <span class="mr-4" style="margin-top: -2px"><img
                                                            src="/image/svg/icon-clock.svg" alt=""></span>
                                                    <span
                                                        class="font-weight-semibold">{{ $job->created_at->diffForHumans() }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Featured Job -->
                            </div>
                        @endforeach
                        <div class="text-center pt-5 pt-lg-13">
                            <a class="text-green font-weight-bold text-uppercase font-size-3" href="#">
                                Load More <i class="fas fa-sort-down ml-3"></i>
                            </a>
                        </div>
                    </div>
                    <!-- form end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
