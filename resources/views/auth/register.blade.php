@section('title', 'Registration')

<x-guest-layout class="bg-gradient-to-r from-lilac-400 to-lilac-600 min-h-screen flex items-center justify-center">

    <x-authentication-card class="bg-white shadow-xl rounded-lg p-8 max-w-md w-full">

        <x-validation-errors class="mb-4" />
        <h1 class="text-4xl text-center font-bold mb-6 text-gray-800">REGISTRATION</h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" class="block text-sm font-medium text-gray-700" />
                <x-input id="name" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-lilac-500 focus:border-lilac-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="block text-sm font-medium text-gray-700" />
                <x-input id="email" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-lilac-500 focus:border-lilac-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" class="block text-sm font-medium text-gray-700" />
                <x-input id="password" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-lilac-500 focus:border-lilac-500" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="block text-sm font-medium text-gray-700" />
                <x-input id="password_confirmation" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-lilac-500 focus:border-lilac-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div>
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required class="text-lilac-600 focus:ring-lilac-500" />
                            <div class="ml-2 text-sm text-gray-600">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-lilac-600 hover:text-lilac-800">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-lilac-600 hover:text-lilac-800">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-between">
                <a class="underline text-sm text-lilac-600 hover:text-lilac-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="bg-lilac-600 text-white font-bold py-2 px-4 rounded-md hover:bg-lilac-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lilac-500">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
