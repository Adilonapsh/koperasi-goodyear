<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-3 px-5 lg:p-0">
                <h1 class="text-4xl">Selamat Datang,</h1>
                <h4 class="text-2xl font-bold">{{ Auth::user()->name }}.</h4>
            </div>
            <div class="bg-gray-50 p-10 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-3">
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Status Dana Segar</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Potongan Koperasi</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Plafon Konsumsi</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Transaksi Konsumsi</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Harga Barang</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Simpanan</p>
                    </div>
                    <div class="flex bg-gray-200 h-[200px] items-center justify-center shadow-lg">
                        <p>Upload Harian</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
