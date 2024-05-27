<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informasi Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update Informasi akun nama dan email.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-lg" :value="old('name', $user->name)" required autofocus autocomplete="name" />

            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full text-lg" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button id="saveButton" disable style="background-color: green; transition: box-shadow 0.3s;" 
            onmouseover="this.style.boxShadow='0 0 10px 5px lightgreen'" onmouseout="this.style.boxShadow='none'">{{ __('Simpan') }}</x-primary-button>
        </div>
        
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('saveButton').addEventListener('click', function() {
        let nameInput = document.getElementById('name').value;
        let emailInput = document.getElementById('email').value;
        
        let existingNames = ["Azzam",]; 
        let existingEmails = ["adinsjhay10.com",]; 
        
        if (existingNames.includes(nameInput) || existingEmails.includes(emailInput)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Nama atau email sudah ada, silakan gunakan yang lain!',
                timer: 3000
            });
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Disimpan',
                showConfirmButton: false,
                timer: 2000 
            });
        }
    });
</script>
