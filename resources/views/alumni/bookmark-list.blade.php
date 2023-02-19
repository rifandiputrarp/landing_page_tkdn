<x-app-layout>
    <div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
        <div class="container">
            <div class="row">
                <div style="max-width: 860px; margin: 0 auto; padding: 0 10px;">
                    <div class="d-flex align-items-center justify-content-between mb-6">
                        <h5 class="font-size-4 font-weight-normal text-gray">
                            <a class="d-flex align-items-center" href="{{ route('home') }}"> <i
                                    class="icon icon-small-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
                                </i><span
                                    class="text-uppercase font-size-3 font-weight-bold text-gray">Kembali</span></a>
                        </h5>

                    </div>
                    @foreach ($bookmarks as $bookmark)
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
                                                <h3 class="mb-0"><a class="font-size-6 heading-default-color"
                                                        href="{{ route('job-posts.show', $bookmark->jobPost->id) }}">{{ $bookmark->jobPost->title }}</a>
                                                </h3>
                                                <a href="#"
                                                    class="font-size-3 text-default-color line-height-2">{{ $bookmark->jobPost->company->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right pt-7 pt-md-5">
                                        <div class="media justify-content-md-end">
                                            <div class="image mr-5 mt-2">
                                                <img src="/image/svg/icon-fire-rounded.svg" alt="">
                                            </div>
                                            <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span
                                                    class="text-black-2">{{ $bookmark->jobPost->salary }}</span> IDR</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-8">
                                    <div class="col-md-7">
                                        <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                                            @foreach (explode(',', $bookmark->jobPost->technical_skills) as $technical_skill)
                                                <li>
                                                    <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2"
                                                        href="#">{{ $technical_skill }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                                            <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                <span class="mr-4" style="margin-top: -2px"><img
                                                        src="/image/svg/icon-loaction-pin-black.svg" alt=""></span>
                                                <span class="font-weight-semibold">{{ $bookmark->jobPost->location }}</span>
                                            </li>
                                            <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                <span class="mr-4" style="margin-top: -2px"><img
                                                        src="/image/svg/icon-suitecase.svg" alt=""></span>
                                                <span class="font-weight-semibold">{{ $bookmark->jobPost->type }}</span>
                                            </li>
                                            <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                                                <span class="mr-4" style="margin-top: -2px"><img
                                                        src="/image/svg/icon-clock.svg" alt=""></span>
                                                <span
                                                    class="font-weight-semibold">{{ $bookmark->jobPost->created_at->diffForHumans() }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="text-right font-size-small">
                                    <form method="POST" action="{{ route('bookmarks.destroy', $bookmark->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('bookmarks.destroy', $bookmark->id) }}"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            <span class="mr-1 text-red" style="margin-top: -2px"><i
                                                    class="far fa-trash-alt"></i></span>
                                            <span class="font-weight-semibold text-red">Hapus</span>
                                        </a>
                                    </form>
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
            </div>
        </div>
    </div>
</x-app-layout>
