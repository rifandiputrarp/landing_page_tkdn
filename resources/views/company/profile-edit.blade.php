<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

            <div class="mb-6">
                <div class="mt-6">

                    <div class="container">

                        <div class="mb-15 mb-lg-23">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <h3 class="font-size-6 mb-4">Edit Perusahaan</h3>
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">
                                        <div class="upload-file mb-16 text-center">
                                            <div id="userActions" class="square-144 m-auto px-6 mb-7">
                                                <label for="fileUpload" class="mb-0 font-size-4 text-smoke">Browse or
                                                    Drag and Drop</label>
                                                <input type="file" id="fileUpload" class="sr-only" />
                                            </div>
                                            <!-- <img id="imgPrime" src="" alt="uploaded image placeholder" /> -->
                                            <!-- <input type="file" id="upfile"> -->
                                        </div>
                                        <form action="/">
                                            <fieldset>
                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="namedash"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Nama
                                                                Perusahaan</label>
                                                            <input type="text" class="form-control h-px-48"
                                                                id="namedash" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="select2"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jenis
                                                                Perusahaan</label>
                                                            <select id="select2"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option>B2B</option>
                                                                <option>B3B</option>
                                                                <option>B4B</option>
                                                                <option>B5B</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-8">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group position-relative">
                                                            <label for="select3"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jumlah
                                                                karyawan</label>
                                                            <select id="select3"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option>10-50</option>
                                                                <option>50-70</option>
                                                                <option>70-80</option>
                                                                <option>80-90</option>
                                                                <option>90-100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="address"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Lokasi</label>
                                                            <select name="address" id="address"
                                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                                                <option value="">DKI Jakarta</option>
                                                                <option value="">DKI Jakarta</option>
                                                                <option value="">DKI Jakarta</option>
                                                            </select>
                                                            <span
                                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="aboutTextarea"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tentang
                                                                Perusahaan</label>
                                                            <textarea name="textarea" id="aboutTextarea" cols="30"
                                                                rows="7"
                                                                class="border border-mercury text-gray w-100 pt-4 pl-6"
                                                                placeholder="Describe about the company what make it unique"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-xl-1">
                                                    <div class="form-group">
                                                        <label for="phone"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                        <input type="tel" class="form-control h-px-48" id="phone"
                                                            name="phone" value="{{ old('phone') }}" required>
                                                    </div>
                                                </div>

                                                <div class="mb-xl-1">
                                                    <div class="form-group">
                                                        <label for="linkedin_link"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Linkedin</label>
                                                        <input type="text" class="form-control h-px-48"
                                                            id="linkedin_link" name="linkedin_link"
                                                            value="{{ old('linkedin_link') }}" required>
                                                    </div>
                                                </div>

                                                <div class="mb-xl-1">
                                                    <div class="form-group">
                                                        <label for="twitter_link"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Twitter</label>
                                                        <input type="text" class="form-control h-px-48"
                                                            id="twitter_link" name="twitter_link"
                                                            value="{{ old('twitter_link') }}" required>
                                                    </div>
                                                </div>

                                                <div class="mb-xl-1">
                                                    <div class="form-group">
                                                        <label for="website_link"
                                                            class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Website</label>
                                                        <input type="text" class="form-control h-px-48"
                                                            id="website_link" name="website_link"
                                                            value="{{ old('website_link') }}" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email"
                                                        class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Email</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="example@gmail.com" id="email" name="email"
                                                        value="{{ old('email') }}">
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

                                                <div class="form-group mb-8 py-4">
                                                    <input type="submit" value="Simpan"
                                                        class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
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
