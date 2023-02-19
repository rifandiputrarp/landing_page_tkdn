<x-guest-layout>
    <div class="mt-24" style="max-width: 600px; margin: 0 auto;">
        <div class="container">
            <div class="mb-15 mb-lg-23">
                <div class="row">
                    <div class="col-xxxl-9 px-lg-13 px-6">
                        <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">
                            <p class="mb-9">
                                Terima kasih telah mendaftar! Silahkan verifikasi email Anda.
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <div style="font-size: 14px; color:green;" class="mb-5">
                                    Link verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <div>
                                    <div class="form-group mb-8">
                                        <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Kirim
                                            ulang verifikasi</button>
                                    </div>
                                </div>
                            </form>
                           <div class="text-right">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm btn btn-link text-right">
                                    Log Out
                                </button>
                            </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
