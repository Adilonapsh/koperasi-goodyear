<div>
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-10">
        <div class="mb-5">
            {{-- @json($fjkrDetail) --}}
            <h5 class="text-2xl mb-2 bg-green-600 text-white py-5 text-center">Transaksi Belanja Kredit</h5>
            <div class="px-0 lg:px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    @php
                        $subTotal = 0;
                        $grandTotal = 0;
                    @endphp
                    @foreach ($fjkrDetail as $fjkr)
                        @if (count($fjkr->fjkrDetail) !== 0)
                            <tr class="my-2">
                                <th class="bg-green-300 border border-green-400 py-3" colspan="3">{{ $fjkr->no_fj }}
                                    {{ $fjkr->tgl_fj }}</th>
                            </tr>
                            @foreach ($fjkr->fjkrDetail as $key => $detail)
                                <tr>
                                    <td class="px-4 border">
                                        {{ $detail->jumlah_barang }}
                                        {{ $detail->fk_barang ? $detail->fk_barang->satuan : 'PCS' }}
                                        {{ $detail->kode_barang }}
                                        {{ $detail->fk_barang ? $detail->fk_barang->nama_barang : $detail->kode_barang }}
                                    </td>
                                    <td class="text-end border">Rp. {{ number_format($detail->harga_barang) }}</td>
                                    <td class="text-end border">Rp.
                                        {{ number_format($detail->jumlah_barang * $detail->harga_barang) }}</td>
                                    @php
                                        $subTotal += $detail->jumlah_barang * $detail->harga_barang;
                                        $grandTotal += $detail->jumlah_barang * $detail->harga_barang;
                                    @endphp
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                    <tr class="font-bold ">
                        <td class="border bg-green-300 border-green-400 py-3">Sub Total</td>
                        <td class="text-end border bg-green-300 border-green-400" colspan="2">Rp.
                            {{ number_format($subTotal) }}</td>
                    </tr>
                    <tr class="font-bold ">
                        <td class="border bg-green-300 border-green-400 py-3">Grand Sub Total</td>
                        <td class="text-end border bg-green-300 border-green-400" colspan="2">Rp.
                            {{ number_format($grandTotal) }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="mb-5">
            <h5 class="text-2xl mb-2 bg-green-600 text-white py-5 text-center">Angsuran PK</h5>
            <div class="px-5">
                <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                    <tr>
                        <td>Angsuran</td>
                        <td class="text-end">Rp. {{ number_format(Auth::user()->total_belanja) }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
