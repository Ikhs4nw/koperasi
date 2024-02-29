<section>
    @if (session('toast_success') === 'Profil Update Success!')
        @push('sweet-allert')
            @include('sweetalert::alert')
        @endpush
    @endif

    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi Profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Perbarui informasi profil dan alamat email akun Anda.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <x-text-input id="name" name="name" type="text"
                                    class="form-control x-text-input" :value="old('name', $user->name)" autofocus autocomplete="name"
                                    placeholder="Masukkan Nama Anda" />
                            </div>
                            <x-input-error class="x-input-error" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="name">{{ __('Username') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-id-card"></i></span>
                                <x-text-input id="username" name="username" type="text"
                                    class="form-control x-text-input" :value="old('username', $user->username)" autofocus
                                    autocomplete="username" placeholder="Masukkan Nama Pengguna Anda" />
                            </div>
                            <x-input-error class="x-input-error" :messages="$errors->get('username')" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="no_telp">{{ __('Telphone Number') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-phone-call"></i></span>
                                <x-text-input id="no_telp" class="form-control x-text-input" type="text"
                                    name="no_telp" :value="old('no_telp', $user->no_telp)" autofocus autocomplete="no_telp"
                                    placeholder="Masukkan Nomor Telpon Anda" />
                            </div>
                            <x-input-error class="x-input-error" :messages="$errors->get('no_telp')" />
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="alamat">{{ __('Address') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-home"></i></span>
                                <x-text-input id="alamat" name="alamat" type="text"
                                    class="form-control x-text-input" :value="old('alamat', $user->alamat)" autofocus autocomplete="alamat"
                                    placeholder="Masukkan Alamat Anda" />
                            </div>
                            <x-input-error class="x-input-error" :messages="$errors->get('alamat')" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">{{ __('Email') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <x-text-input id="email" name="email" type="email"
                                    class="form-control x-text-input" :value="old('email', $user->email)" autofocus autocomplete="email"
                                    placeholder="Masukkan Email Baru Anda" />
                            </div>
                            <x-input-error class="x-input-error" :messages="$errors->get('email')" />
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                <div class="mt-4">
                                    <p class="notif-email-unverified">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="text-email-verivication">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
