<x-app-layout>
    <div class="dashboard-main-container mt-25" id="dashboard-body">
        <div class="container">

            <div class="mb-6">
                <div class="mt-6">
                    <div class="container">
                        <h3 class="font-size-6 mb-4">Edit Alumni</h3>
                        <div class="mb-15 mb-lg-23">
                            <div class="row">
                                <div class="col-xxxl-9">
                                    <div
                                        class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
                                                            <label for="nim"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">NIM</label>
                                                            <input type="text" class="form-control h-px-48" id="nim"
                                                                name="nim"
                                                                value="{{ old('nim', $alumnus->studentInfo->nim) }}"
                                                                placeholder="xx.xx.xxxx">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="faculty"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Fakultas</label>
                                                            <select name="faculty" id="faculty"
                                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                                                <option value="Ilmu Komputer"
                                                                    {{ old('faculty', $alumnus->studentInfo->faculty) == 'Ilmu Komputer' ? 'selected' : '' }}>
                                                                    Ilmu Komputer</option>
                                                                <option value="Bisnis dan Ilmu Sosial"
                                                                    {{ old('faculty', $alumnus->studentInfo->faculty) == 'Bisnis dan Ilmu Sosial' ? 'selected' : '' }}>
                                                                    Bisnis dan Ilmu Sosial</option>
                                                            </select>
                                                            <span
                                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="prodi"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Program
                                                                Studi</label>
                                                            <select name="prodi" id="prodi"
                                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                                                <option value="Informatika (S1)"
                                                                    {{ old('prodi', $alumnus->studentInfo->prodi) == 'Informatika (S1)' ? 'selected' : '' }}>
                                                                    Informatika (S1)</option>
                                                                <option value="Sistem Informasi (S1)"
                                                                    {{ old('prodi', $alumnus->studentInfo->prodi) == 'Sistem Informasi (S1)' ? 'selected' : '' }}>
                                                                    Sistem Informasi (S1)</option>
                                                                <option value="Teknologi Informasi (S1)"
                                                                    {{ old('prodi', $alumnus->studentInfo->prodi) == 'Teknologi Informasi (S1)' ? 'selected' : '' }}>
                                                                    Teknologi Informasi (S1)</option>

                                                                <option value="Ilmu Komunikasi (S1)"
                                                                    {{ old('prodi', $alumnus->studentInfo->prodi) == 'Ilmu Komunikasi (S1)' ? 'selected' : '' }}>
                                                                    Ilmu Komunikasi (S1)</option>
                                                                <option value="Bisnis Digital (S1)"
                                                                    {{ old('prodi', $alumnus->studentInfo->prodi) == 'Bisnis Digital (S1)' ? 'selected' : '' }}>
                                                                    Bisnis Digital (S1)</option>
                                                            </select>
                                                            <span
                                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="class_year"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tahun
                                                                Angkatan</label>
                                                            <select name="class_year" id="class_year"
                                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                                                @foreach (array_reverse(range(2009, 2021)) as $year)
                                                                    <option
                                                                        {{ old('class_year', $alumnus->studentInfo->class_year) == $year ? 'selected' : '' }}>
                                                                        {{ $year }}</option>
                                                                @endforeach
                                                            </select>
                                                            <span
                                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-8">
                                                    <div class="col-lg-6">
                                                        <div class="form-group position-relative">
                                                            <label for="graduate_year"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tahun
                                                                Lulusan</label>
                                                            <select name="graduate_year" id="graduate_year"
                                                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                                                @foreach (array_reverse(range(2009, 2021)) as $year)
                                                                    <option
                                                                        {{ old('class_year', $alumnus->studentInfo->graduate_year) == $year ? 'selected' : '' }}>
                                                                        {{ $year }}</option>
                                                                @endforeach
                                                            </select>
                                                            <span
                                                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
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
                                                            <label for="phone"
                                                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Telepon</label>
                                                            <input type="tel" class="form-control h-px-48" id="phone"
                                                                name="phone"
                                                                value="{{ old('email', $alumnus->studentInfo->phone) }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <input type="submit" value="Update Profile"
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
