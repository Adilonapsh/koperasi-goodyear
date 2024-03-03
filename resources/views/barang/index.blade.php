<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex gap-5 items-center">
                <i class="fa-solid fa-money-bill text-4xl"></i>
                {{ __('Daftar Harga') }}
            </div>
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <livewire:data-barang-layouts />
        </div>
    </div>
</x-app-layout>
