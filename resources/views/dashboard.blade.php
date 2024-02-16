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
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-3">
                    <a href="{{ route('status-dana-segar.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-square-poll-horizontal text-4xl lg:text-5xl text-green-500"></i>
                                <p>Status Dana Segar</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('potongan-koperasi.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-percent text-4xl lg:text-5xl text-red-500"></i>
                                <p>Potongan Koperasi</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('plafon-konsumsi.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-cart-arrow-down text-4xl lg:text-5xl text-blue-700"></i>
                                <p>Plafon <br> Konsumsi</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('transaksi-konsumsi.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-right-left text-4xl lg:text-5xl text-emerald-500"></i>
                                <p>Transaksi Konsumsi</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('barang.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-money-bill text-4xl lg:text-5xl text-rose-600"></i>
                                <p>Harga Barang</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('simpanan.index') }}" class="hover:shadow-lg transition-all">
                        <div
                            class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                            <div>
                                <i class="fa-solid fa-wallet text-4xl lg:text-5xl text-blue-700"></i>
                                <p>Simpanan</p>
                            </div>
                        </div>
                    </a>
                    @hasanyrole('admin')
                        <a href="{{ route('upload-harian.index') }}" class="hover:shadow-lg transition-all">
                            <div
                                class="flex bg-gray-200 py-10 h-[150px] lg:h-[200px] items-center text-center justify-center shadow-lg">
                                <div>
                                    <i class="fa-solid fa-download text-4xl lg:text-5xl"></i>
                                    <p>Update Harian</p>
                                </div>
                            </div>
                        </a>
                    @endhasanyrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
