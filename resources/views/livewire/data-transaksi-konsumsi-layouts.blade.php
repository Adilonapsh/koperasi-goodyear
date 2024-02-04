<div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div class="mb-5">
            <h5 class="text-2xl mb-2 bg-gray-900 text-white py-5 text-center">Transaksi Belanja Kredit</h5>
            <div class="px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <tr>
                        <th>K2301.0001 15-01-2024</th>
                    </tr>
                    <tr>
                        <td>999 PCS 1234567890123 Kacang Kulit</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                    </tr>
                    <tr>
                        <th>K2301.0001 15-01-2024</th>
                    </tr>
                    <tr>
                        <td>999 PCS 1234567890123 Indomie Goreng</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td class="text-end"></td>
                        <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                    </tr>
                    <tr>
                        <td>Grand Sub Total</td>
                        <td class="text-end"></td>
                        <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="mb-5">
            <h5 class="text-2xl mb-2 bg-gray-900 text-white py-5 text-center">Angsuran PK</h5>
            <div class="px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <tr>
                        <td>Angsuran Bulan 01-2024</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->total_belanja) }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
