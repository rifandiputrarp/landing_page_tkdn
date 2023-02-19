<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">
            <div class="mb-6">
                <div class="mt-6">
                    <div class="container">
                        <div class="mb-15 mb-lg-23">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <h3 class="font-size-6 mb-4">Tambah Lowongan</h3>
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form method="POST" action="{{ route('job-posts.store') }}">
                                            @csrf
                                            <fieldset>
                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="title"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Judul</label>
                                                            <input type="text" class="form-control h-px-48" id="title"
                                                                name="title" value="{{ old('title') }}" placeholder=""
                                                                required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="type"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jenis
                                                                Pekerjaan</label>
                                                            <select id="type" name="type"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option value="">--</option>
                                                                <option
                                                                    {{ old('type') == 'Penuh Waktu' ? 'selected' : '' }}
                                                                    value="Penuh Waktu">Penuh Waktu</option>
                                                                <option
                                                                    {{ old('type') == 'Paruh Waktu' ? 'selected' : '' }}
                                                                    value="Paruh Waktu">Paruh Waktu</option>
                                                                <option
                                                                    {{ old('type') == 'Kontrak' ? 'selected' : '' }}
                                                                    value="Kontrak">Kontrak</option>
                                                                <option
                                                                    {{ old('type') == 'Magang' ? 'selected' : '' }}
                                                                    value="Magang">Magang</option>
                                                                <option
                                                                    {{ old('type') == 'Sementara' ? 'selected' : '' }}
                                                                    value="Sementara">Sementara</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="job_category_id"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Kategori</label>
                                                            <select id="job_category_id" name="job_category_id"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option value="">--</option>
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        {{ old('job_category_id') == $category->id ? 'selected' : '' }}
                                                                        value="{{ $category->id }}">
                                                                        {{ $category->name }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="career_level"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Jenjang
                                                                Karir</label>
                                                            <input type="text" class="form-control h-px-48"
                                                                id="career_level" name="career_level"
                                                                value="{{ old('career_level') }}" placeholder=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="description"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Deskripsi</label>
                                                            <textarea name="description" id="description" cols="30"
                                                                rows="7"
                                                                class="border border-mercury text-gray w-100 pt-4 pl-6"
                                                                placeholder=""
                                                                required>{{ old('description') }}</textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="soft_skills"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Kemampuan
                                                                Dasar</label>
                                                            <input type="text" class="form-control h-px-48"
                                                                id="soft_skills" name="soft_skills"
                                                                value="{{ old('soft_skills') }}" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="technical_skills"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Kemampuan
                                                                Teknis</label>
                                                            <input type="text" class="form-control h-px-48"
                                                                id="technical_skills" name="technical_skills"
                                                                value="{{ old('technical_skills') }}" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6 mb-xl-0 mb-7">
                                                        <div class="form-group position-relative">
                                                            <label for="experience_level"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Pengalaman</label>
                                                            <select id="experience_level" name="experience_level"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option value="">--</option>
                                                                <option
                                                                    {{ old('experience_level') == 'Fresh Graduate' ? 'selected' : '' }}
                                                                    value="Fresh Graduate">Fresh Graduate</option>
                                                                <option
                                                                    {{ old('experience_level') == '< 1 tahun' ? 'selected' : '' }}
                                                                    value="< 1 tahun">
                                                                    < 1 tahun</option>
                                                                <option
                                                                    {{ old('experience_level') == '1 - 2 tahun' ? 'selected' : '' }}
                                                                    value="1 - 2 tahun">1 - 2 tahun</option>
                                                                <option
                                                                    {{ old('experience_level') == '3 - 5 tahun' ? 'selected' : '' }}
                                                                    value="3 - 5 tahun">3 - 5 tahun</option>
                                                                <option
                                                                    {{ old('experience_level') == '6 - 10 tahun' ? 'selected' : '' }}
                                                                    value="6 - 10 tahun">6 - 10 tahun</option>
                                                                <option
                                                                    {{ old('experience_level') == '> 10 tahun' ? 'selected' : '' }}
                                                                    value="> 10 tahun">> 10 tahun</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="salary"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Kisaran
                                                                Gaji</label>
                                                            <select id="salary" name="salary"
                                                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                <option value="">--</option>
                                                                <option
                                                                    {{ old('salary') == '1-3jt' ? 'selected' : '' }}
                                                                    value="1-3jt">1-3jt</option>
                                                                <option
                                                                    {{ old('salary') == '4-7jt' ? 'selected' : '' }}
                                                                    value="4-7jt">
                                                                    4-7jt</option>
                                                                <option
                                                                    {{ old('salary') == '8-12jt' ? 'selected' : '' }}
                                                                    value="8-12jt">8-12jt</option>
                                                                <option
                                                                    {{ old('salary') == '13-25jt' ? 'selected' : '' }}
                                                                    value="12-25jt">12-25jt</option>
                                                                <option
                                                                    {{ old('salary') == '26-50jt' ? 'selected' : '' }}
                                                                    value="26-50jt">26-50jt</option>
                                                                <option
                                                                    {{ old('salary') == '> 50jt' ? 'selected' : '' }}
                                                                    value="> 50jt">> 50jt</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="location"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Lokasi</label>
                                                            <input type="text" class="form-control h-px-48"
                                                                id="location" name="location"
                                                                value="{{ old('location') }}" placeholder="">
                                                        </div>
                                                    </div>
                                                    @if (auth()->user()->role == 'admin')
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="company_id"
                                                                    class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Perusahaan</label>
                                                                <select id="company_id" name="company_id"
                                                                    class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">
                                                                    <option value="">--</option>
                                                                    @foreach ($companies as $company)
                                                                        <option
                                                                            {{ old('company_id') == $company->id ? 'selected' : '' }}
                                                                            value="{{ $company->id }}">
                                                                            {{ $company->name }} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                {{-- <div class="row mb-xl-1 mb-9">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="attachment_path"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Lampiran</label>
                                                            <input class="form-control" type="file"
                                                                id="attachment_path" name="attachment_path"
                                                                style="height: auto; padding: 4px; cursor: pointer;">
                                                        </div>
                                                    </div>
                                                </div> --}}
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
