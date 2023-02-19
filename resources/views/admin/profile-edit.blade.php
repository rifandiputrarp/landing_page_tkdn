<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

            <div class="mb-6">
                <div class="mt-6">
                    <div class="container">
                        <h3 class="font-size-6 mb-4">Edit Profile</h3>
                        <div class="mb-15 mb-lg-23">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                        <form method="POST" action="{{ route('alumni.update', $alumnus->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <fieldset>
                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama</label>
                                                            <input type="text" class="form-control h-px-48" id="name"
                                                                name="name" value="{{ old('name', $alumnus->name) }}"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="email"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Email</label>
                                                            <input type="email" class="form-control"
                                                                placeholder="example@gmail.com" id="email" name="email"
                                                                value="{{ old('email', $alumnus->email) }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="password"
                                                                class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Kata
                                                                Sandi</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    id="password" placeholder="Enter password"
                                                                    name="password">
                                                                <a href="#"
                                                                    class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                                    data-show-pass="password"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="password_confirmation"
                                                                class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Konfirmasi
                                                                Kata Sandi</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control"
                                                                    id="password_confirmation"
                                                                    placeholder="Enter password"
                                                                    name="password_confirmation">
                                                                <a href="#"
                                                                    class="show-password pos-abs-cr fas mr-6 text-black-2"
                                                                    data-show-pass="password_confirmation"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <input type="submit" value="Simpan"
                                                            class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                                                    </div>
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
