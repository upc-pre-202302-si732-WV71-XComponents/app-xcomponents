<x-app-layout>
    <x-slot name="header">
        <h2 class="h5 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    {{ config('app.faker_locale') }}
</x-app-layout>
