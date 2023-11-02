<x-guest-layout>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class=" flex flex-col justify-center items-center " >
        @csrf

        <div class="bg-green-400 shadow-lg p-14 rounded-lg">
            <div class="mb-4 text-sm text-gray-600 flex flex-col justify-center items-center" >
               Forgot your password? No problem. Just let us know your <br>email address and
                 we will email you a password <br>reset link that will allow you to choose a new one.
            </div>
            <h1 class="text-2xl text-center font-bold uppercase">
                Forgot Password
            </h1>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-guest-layout>
