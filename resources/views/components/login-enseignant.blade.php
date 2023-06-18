<!-- Main modal -->
<div id="login-modal-enseignant" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                    Enseignant
                </h3>
            </div>
        <!-- Modal content -->
        <x-guest-layout>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4"  :status="session('status')" />
        
            <form method="POST" style="background:none;"  action="{{ route('login') }}">
            
                @csrf
        
                <!-- Email Address -->
                <div>
                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                    <x-text-input id="email" class="block mt-1 w-full" type="email" style="background: #f3f4f6;border:none; padding:13px;border-radius:1px; outline:none;" placeholder="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <!-- Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->
        
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" style="background: #f3f4f6;border:none; padding:13px;border-radius:1px; outline:none;" placeholder="Mot de passe" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Remember Me -->
                <!-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div> -->
                <br>
        
                <div class="flex items-center justify-end mt-4" style=" display: flex; flex-direction: column-reverse;justify-content: center; text-align:center;">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __(' Mot de passe oublié ?') }}
                    </a>
                    @endif
                    <br>
        
                    <x-primary-button class="ml-3" style="width: 100%;margin: auto;background: #606C38; justify-content: center;">
                        {{ __('Se connecter') }}
                    </x-primary-button>
                </div>
            </form>
        </x-guest-layout>
        </div>
    </div>
</div> 