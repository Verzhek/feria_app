@extends("layouts.layout")
@section('title')
Register
@endsection
@section('content')

<form method="POST" action=" {{ (url('register')) }}">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block color-gray-900 mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class=" color-gray-900 block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class=" color-gray-900 block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required />
    </div>
        <!-- Location -->
       <div class="mt-4">
            <x-label for="location" :value="__('Location')" />
            <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('Location')" required />
        </div>


    <div class="flex items-center justify-end mt-4">
        <a class="underline color-gray-900 text-sm text-gray-600 hover:text-gray-900" href="{{ url('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-button class="ml-4">
            {{ __('Register') }}
        </x-button>
    </div>
</form>
@endsection
