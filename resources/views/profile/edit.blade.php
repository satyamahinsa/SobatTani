<x-layout>
    <x-slot:title>Edit Profile</x-slot:title>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="my-5 p-4 sm:p-8 rounded-lg border-solid border-2 border-gray-400 shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="my-5 p-4 sm:p-8 rounded-lg border-solid border-2 border-gray-400 shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="my-5 p-4 sm:p-8 rounded-lg border-solid border-2 border-gray-400 shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
