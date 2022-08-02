<x-guest-layout>
    <x-jet-authentication-card>


        <div class="mb-4 text-sm text-gray-600">
            Esta es un área segura de la aplicación. Por favor, confirme su contraseña antes de continuar.
        </div>

        <x-jet-validation-errors class="mb-4" />
        <div class="grid place-content-center">

            <img src="{{asset('avatar.png')}}" class="w-32 place-content-center" alt="">
        </div>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
