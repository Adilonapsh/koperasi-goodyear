<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div class="mb-5">
            <h5 class="text-2xl mb-2 bg-gray-900 text-white py-5 text-center">Plafon Konsumsi</h5>
            <div class="px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <tr>
                        <td>Total Plafon</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                    </tr>
                    <tr>
                        <td>Total Belanja Kredit</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                    </tr>
                    <tr>
                        <td>Total Angsuran PK</td>
                        <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                    </tr>
                    <tr class="font-bold">
                        <td>Saldo Plafon</td>
                        <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
