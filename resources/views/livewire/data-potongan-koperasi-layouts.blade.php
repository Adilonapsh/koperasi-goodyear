<div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 mb-10">
        <div class="lg:mb-5">
            <label for="bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
            <select id="bulan" wire:model="bulan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>
        </div>
        <div class="lg:mb-5">
            <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
            <select id="tahun" wire:model="tahun"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
            </select>
        </div>
        <div class="self-end lg:mb-5 ">
            <button
                class="w-full lg:w-fit text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 "
                wire:click="showTable">
                <div class="text-center" wire:loading wire:target="showTable">
                    <div role="status mr-2">
                        <svg aria-hidden="true"
                            class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                Show
            </button>
        </div>
    </div>


    @if (!$is_table_loaded)
        <div wire:loading wire:target="showTable">
            <div role="status" class="max-w-sm animate-pulse mb-3">
                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
            </div>
            <div role="status"
                class="max-w-full p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                        <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                    </div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
                </div>
                <div class="flex items-center justify-between pt-4">
                    <div>
                        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                        <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                    </div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
                </div>
                <div class="flex items-center justify-between pt-4">
                    <div>
                        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                        <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                    </div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
                </div>
                <div class="flex items-center justify-between pt-4">
                    <div>
                        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                        <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                    </div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
                </div>
                <div class="flex items-center justify-between pt-4">
                    <div>
                        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                        <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
                    </div>
                    <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
                </div>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    @endif
    @if ($is_table_loaded)
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <h5 class="text-2xl mb-2 bg-gray-900 text-white py-5 text-center">Daftar Yang Terpotong</h5>
                <div class="mb-5 px-2">
                    <p class="font-bold">301 Simpanan Wajib</p>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Jumlah</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Jasa Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Potongan</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Saldo</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="mb-5 px-2">
                    <p class="font-bold">302 Simpanan Sukarela</p>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Jumlah</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Jasa Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Potongan</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Saldo</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <hr class="mb-2">
                <div class="mb-5 px-2">
                    <p class="font-bold">Total</p>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Jumlah</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Jasa Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Potongan</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Saldo</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div>
                <h5 class="text-2xl mb-2 bg-gray-900 text-white py-5 text-center">Daftar Yang Tidak Terpotong</h5>
                <div class="mb-5 px-2">
                    <p class="font-bold">273T Perpanjangan 5 Bulan</p>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Jumlah</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Jasa Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Tidak Dipotong</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Saldo</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr class="mb-2">
                <div class="mb-5 px-2">
                    <p class="font-bold">Total</p>
                    <div class="px-5">
                        <table class="w-full text-sm text-left rtl:text-right dark:text-gray-400">
                            <tr>
                                <td>Jumlah</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->min_belanja) }}</td>
                            </tr>
                            <tr>
                                <td>Jasa Pinjaman</td>
                                <td class="text-end">Rp. {{ number_format(Auth::user()->maks_ds) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Tidak Dipotong</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Saldo</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Jangka Waktu</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                            <tr>
                                <td>Bayar</td>
                                <td class="text-end">{{ Auth::user()->pinjaman_sebelumnya}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- <livewire:users-table /> --}}
</div>