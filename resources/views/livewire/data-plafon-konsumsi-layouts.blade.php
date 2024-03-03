<div>
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-10">
        <div class="mb-5">
            <h5 class="text-2xl mb-2 bg-green-600 text-white py-5 text-center">Plafon Konsumsi</h5>
            <div class="px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <tr>
                        <td>Total Plafon</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->plafon) }}</td>
                    </tr>
                    <tr>
                        <td>Total Belanja Kredit</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->total_belanja) }}</td>
                    </tr>
                    <tr>
                        <td>Total Angsuran PK</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->pk) }}</td>
                    </tr>
                    <tr class="font-bold">
                        <td>Saldo Plafon</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->saldo) }}</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="mt-2">
                <p class="text-sm">Terakhir Update : {{ Auth::user()->updated_at }}</p>
            </div>
        </div>
    </div>
</div>
