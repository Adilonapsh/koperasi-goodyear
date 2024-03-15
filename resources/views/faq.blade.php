<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex gap-5 items-center">
                <i class="fa-solid fa-question text-4xl"></i>
                {{ __('Frequently Asked Question') }}
            </div>
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div id="accordion-nested-parent" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Apa saja yang ada di Koperasi Karyawan Goodyear ? </span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        {{-- <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                            interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                            navbars, and more.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                            developing websites even faster with components on top of Tailwind CSS.</p>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">What are the differences between Flowbite and
                            Tailwind UI?</p> --}}
                        <!-- Nested accordion -->
                        <div id="accordion-nested-collapse" data-accordion="collapse">
                            <h2 id="accordion-nested-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-1">
                                    <span>1. Toko Kopkar Goodyear</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-1" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 transition-all">
                                    <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                        <li>Sembako</li>
                                        <li>Groceries</li>
                                        <li>Konsinyasi, seperti : jas hujan, helm, tas sekolah, dll</li>
                                        <li> Tiket renang Jungle Waterpark & Marcopolo</li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-2">
                                    <span>2. Simpan-Pinjam</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-2" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <ul class="ps-5 mt-2 space-y-1">
                                        <li>2.1 Simpanan</li>
                                        <ul class="ms-5 mb-5">
                                            <li>2.1.1. Simpanan Sukarela (potong gaji atau langsung)</li>
                                            <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                                <li>Bila melalui potong gaji, mengisi form sukarela di kasir koperasi ( <tgl
                                                    15 diproses belum berjalan, >15 diproses dibulan berikutnya) </li>
                                                <li>Menyetor uang tunai/bukti transfer bank ke kasir dan dibuatkan kwitansi resmi koperasi .</li>
                                            </ul>
                                            <li>2.1.2. Dana Titipan</li>
                                            <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                                <li>Menyetor minimal Rp 1 juta ke kasir koperasi, diberikan sertifikat 1
                                                    minggu kemudian sebagai bentuk bukti yang dipegang anggota. </li>
                                                <li>Mengendap minimal 3 bulan</li>
                                                <li>Jasa yang diberikan akan disimpan di akun sukarela atasnama anggota yang bersangkutan
                                                    atau dicatat & diakumulasikan diakun tertentu atasnama anggota yang bersangkutan. </li>
                                            </ul>
                                        </ul>
                                        <li>2.2 Pinjaman</li>
                                        <ul class="ms-5 mb-5">
                                            <li>2.2.1. Dana khusus dalam jangka waktu tertentu</li>
                                            <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                                <p>Cara :</p>
                                                <li>Mengisi form pengajuan di bagian pembelian/Ibu Ina kurniawati.</li>
                                                <li>Melampirkan print out potongan koperasi terupdate.</li>
                                                <li>Melampirkan slip gaji terupdate.</li>
                                                <li>Seleksi oleh pengurus koperasi.</li>
                                                <li>Release di setiap akhir bulan (kecuali momen – momen tertentu)
                                                    melalui proses transfer ke rekening bank atasnama anggota yang bersangkutan.</li>
                                            </ul>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-3">
                                    <span>3. Surat Pengantar – Kerjasama dengan toko-toko.</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-3" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-3">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <ul class="ps-5 mt-2 space-y-1">
                                        <li>3.1 Optik</li>
                                        <ul class="ms-5 mb-5">
                                            <li>3.1.1. Optik Kasoem (CCM, Botani Square, RS PMI) </li>
                                            <li>3.1.2. Optik Neo (Yogja junction, Cilendek-samping SPBU) </li>
                                            <li>3.1.3. Optik Kayumanis ( Hypermart yasmin, Plaza Jambu Dua, Cisarua, Cibedug Ciawi, Cimahpar,
                                                Pertokoan Cibadak Cijeruk ). </li>
                                        </ul>
                                        <li>3.2 Bengkel Motor</li>
                                        <ul class="ms-5 mb-5">
                                            <li>3.2.1. PT Sanprima Sentosa-AHASS  Jl. Jend. Sudirman Bogor</li>
                                            <li>3.2.2. CV Guna motor-AHASS Jl. K.S. Tubun Bogor (Olympic)</li>
                                            <li>3.2.3. CV Pahlawan-AHASS Jl. Raya Ciomas Gunung Batu Bogor </li>
                                            <li>3.2.4. CV Dwi Makmur motor-AHASS Jl. K.H. Soleh Iskandar</li>
                                            <li>3.2.5. Yamaha Mekar Motor-YAMAHA Jl. Pajajaran Bogor</li>
                                            <li>3.2.6. Jayamandiri Gemasejati Motor- YAMAHA Jl. Siliwangi Bogor</li>
                                        </ul>
                                        <li>3.3 Seragam, sandang, & sepatu olahraga/casual</li>
                                        <ul class="ms-5 mb-5">
                                            <li>3.3.1. Toko ABC Fashion– Pasar Anyar Bogor </li>
                                            <li>3.3.2. Toko Tembako- Jembatan Merah Bogor</li>
                                        </ul>
                                        <li>3.4 Helm, jas hujan, dll</li>
                                        <ul class="ms-5 mb-5">
                                            <li>3.4.1. Noval Helm-Cihideung Bogor</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-4">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-4" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-4">
                                    <span>4. Sewa Kendaraan</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-4" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-4">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <ul class="ps-5 mt-2 space-y-">
                                        <li>4.1 Avanza (No Polisi Genap)</li>
                                        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                            <li>Cek schedule booking  terupdate di manager koperasi pada hari & jam kerja. 1 minggu sebelum dan
                                                sesudah lebaran berlaku cara khusus (lelang hari terlama). </li>
                                            <li>Mengisi Perjanjian Sewa Kendaraan & mendapatkan gate pass keluar-masuk kendaraan dari   kawasan
                                                PT Goodyear Ind., Tbk. </li>
                                            <li>Rate Rp 300.000/hari & Rp 350.000,- pada sabtu/minggu/dan hari libur nasional.
                                                (rate dapat berubah sewaktu-waktu).</li>
                                        </ul>
                                        <li>4.2 APV (No Polisi Ganjil)</li>
                                        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                            <li>Cek schedule booking  terupdate di manager koperasi pada hari & jam kerja. 1 minggu sebelum dan
                                                sesudah lebaran berlaku cara khusus (lelang hari terlama). </li>
                                            <li>Mengisi Perjanjian Sewa Kendaraan & mendapatkan gate pass keluar-masuk kendaraan dari   kawasan
                                                PT Goodyear Ind., Tbk. </li>
                                            <li>Rate Rp 300.000/hari & Rp 350.000,- pada sabtu/minggu/dan hari libur nasional.
                                                (rate dapat berubah sewaktu-waktu).</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-5">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-5" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-5">
                                    <span>5. Kredit Motor</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-5" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-5">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                        <li>Melihat harga motor merk Yamaha & Honda terupdate di kasir
                                            koperasi.</li>
                                        <li>Mengisi form pengajuan dengan melampirkan FC KK, slyp gaji & print
                                            out potongan koperasi terupdate. </li>
                                        <li>Menunggu unit motor terkirim ke alamat rumah sesuai kemampuan
                                            penyediaan unit oleh dealer yang telah kerjasama dengan koperasi.</li>
                                    </ul>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-6">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-6" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-6">
                                    <span>6. Permintaan khusus anggota atas barang dagang lainnya.</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-6" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-6">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <p>Melayani permintaan penyediaan barang rumah tangga lainnya yang  diinginkan oleh anggota dengan
                                        mempertimbangkan kemampuan anggota & kebijakan lainnya dengan jangka waktu tertentu.
                                    </p>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-7">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-nested-collapse-body-7" aria-expanded="false"
                                    aria-controls="accordion-nested-collapse-body-7">
                                    <span>7. Menjadi mitra dagang – toko kopkar goodyear.</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-7" class="hidden"
                                aria-labelledby="accordion-nested-collapse-heading-7">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 ms-5">
                                        <li>Menemui bagian pembelian koperasi/Ibu Ina, untuk mengajukan
                                            kerjasama barang toko dengan sistem titip jual/konsinyasi. </li>
                                        <li>Bersedia mengikuti peraturan koperasi mengenai discount, jatuh
                                            tempo pembayaran, dll</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End: Nested accordion -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
