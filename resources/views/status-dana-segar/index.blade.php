<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Status Dana Segar') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="mb-5">
                    <h5 class="text-2xl mb-2 bg-cyan-200 py-5 text-center">Syarat dan Ketentuan</h5>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Minimum Belanja</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja)  }}</td>
                            </tr>
                            <tr>
                                <td>Maksimum Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Pinjaman Sebelumnya</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->pinjaman_sebelumnya) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="text-2xl mb-2 bg-cyan-200 py-5 text-center">Kondisi Saat Ini</h5>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Total Belanja Bulan Ini</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->total_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Pinjaman Sebelumnya</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->sisa_lalu) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <livewire:users-table/>
        </div>
    </div>
</x-app-layout>

