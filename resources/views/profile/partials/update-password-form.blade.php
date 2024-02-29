<section>
    @if (session('toast_success') === 'Update Password Success!')
        @push('sweet-allert')
            @include('sweetalert::alert')
        @endpush
    @endif

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Perbarui Kata Sandi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label"
                            for="update_password_current_password">{{ __('Kata Sandi Saat Ini') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-key"></i></span>
                                <x-text-input id="update_password_current_password" name="current_password"
                                    type="password" class="form-control x-text-input" autocomplete="current-password"
                                    placeholder="Masukkan Password Anda Saat Ini" />
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="x-input-error" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label"
                            for="update_password_password">{{ __('Kata Sandi Baru') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-key"></i></span>
                                <x-text-input id="update_password_password" name="password" type="password"
                                    class="form-control x-text-input" autocomplete="new-password"
                                    placeholder="Masukkan Password Baru Anda" />
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="x-input-error" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"
                            for="update_password_password_confirmation">{{ __('Konfirmasi Sandi') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-key"></i></span>
                                <x-text-input id="update_password_password_confirmation" name="password_confirmation"
                                    type="password" class="form-control x-text-input" autocomplete="new-password"
                                    placeholder="Masukkan Password Baru Anda Kembali" />
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="x-input-error" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
