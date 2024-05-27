<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6 text-lg">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Password Lama')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full text-lg" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Password Baru')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full text-lg" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full text-lg" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button id="saveButton" style="background-color: green; transition: box-shadow 0.3s;" 
            onmouseover="this.style.boxShadow='0 0 10px 5px lightgreen'" onmouseout="this.style.boxShadow='none'">{{ __('Simpan') }}</x-primary-button>
        </div>
        

    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const passwordInput = document.getElementById('update_password_password');
    const confirmPasswordInput = document.getElementById('update_password_password_confirmation');
    const saveButton = document.getElementById('savePasswordButton');

    passwordInput.addEventListener('input', toggleSaveButton);
    confirmPasswordInput.addEventListener('input', toggleSaveButton);

    function toggleSaveButton() {
        if (passwordInput.value && confirmPasswordInput.value) {
            saveButton.removeAttribute('disabled');
        } else {
            saveButton.setAttribute('disabled', true);
        }
    }

    document.getElementById('savePasswordButton').addEventListener('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Dirubah',
            showConfirmButton: false,
            timer: 2000 
        });
    });
</script>
