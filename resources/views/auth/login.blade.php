<x-guest-layout>
    <div class="grid grid-cols-2">
        <div class="bg-blue-500 h-screen w-full"></div>
        <div class="flex flex-col items-center justify-center">
            
            <form action="{{ route('login') }}" method="post"
                class="bg-gray-300 p-8 w-3/5 mx-auto shadow-xl rounded-2xl"
            >
                <!-- Session Status -->
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <span class="mb-4 text-2xl font-bold text-center block">
                    Enter login credentials below
                </span>
                
                @csrf

                {{-- Email Address --}}
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                {{-- Password --}}
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                {{-- Login Button --}}
                <div class="flex items-center justify-end mt-4">
                    <x-button class="mt-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>