<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Potongan Koperasi') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <livewire:data-potongan-koperasi-layouts />
        </div>
    </div>
</x-app-layout>
