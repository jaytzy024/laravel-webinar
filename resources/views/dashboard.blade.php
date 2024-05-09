<x-app-layout>
    @if (Auth::user()->role == 'teacher')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <h1>teacher component</h1>
        </h2>
    </x-slot>
    @endif

    @if (Auth::user()->role == 'students')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <h1>students component</h1>
        </h2>
    </x-slot>

    @endif
</x-app-layout>

