<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.') }}
        </p>

    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6"
        onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun Anda? Tindakan ini tidak bisa dibatalkan.');">
        @csrf
        @method('delete')

        <div class="flex justify-end">
            <button type="submit" class="btn btn-danger" {{ ($user->role === 'Petugas') ? 'disabled' : '' }}>
                {{ __('Hapus Akun') }}
            </button>
        </div>
    </form>
</section>
