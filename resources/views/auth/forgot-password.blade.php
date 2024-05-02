<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-500 via-pink-500 to-red-500">
        <div class="bg-white shadow-lg rounded-lg w-full sm:w-96">
            <div class="px-8 py-6">
                <div class="text-center">
                    <x-authentication-card-logo class="h-16 w-auto mx-auto" />
                    <h2 class="mt-6 text-2xl font-extrabold text-gray-900">
                        Forgot Your Password?
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        No problem. Just let us know your email address and we'll send you a link to reset your password.
                    </p>
                </div>

                @session('status')
                    <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ $value }}</span>
                    </div>
                @endsession

                <x-validation-errors class="mt-4" />

                <form method="POST" action="{{ route('password.email') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />

                        <x-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div>
                        <x-button class="w-full bg-pink-500 hover:bg-pink-600">
                            Email Password Reset Link
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>