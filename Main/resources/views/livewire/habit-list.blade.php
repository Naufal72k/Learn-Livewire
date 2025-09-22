<div class="max-w-5xl mx-auto p-6">
    <!-- Header -->
    <header class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-extrabold tracking-tight">Habits</h1>
            <p class="text-sm text-slate-500">Lihat dan kelola kebiasaan harian Anda.</p>
        </div>

        <!-- actions (UI only) -->
        <div class="flex items-center gap-3">
            <label class="relative block">
                <span class="sr-only">Search</span>
                <input type="text" placeholder="Cari kebiasaan..."
                    class="pl-10 pr-3 py-2 w-64 rounded-md border border-slate-200 bg-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400" />
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1113.5 6.5a7.5 7.5 0 013.15 10.15z" />
                </svg>
            </label>

            <button
                class="inline-flex items-center gap-2 px-4 py-2 rounded-md bg-gradient-to-r from-indigo-600 to-indigo-500 text-white font-medium shadow-sm hover:from-indigo-700 hover:to-indigo-600 focus:outline-none">+
                Tambah Habit</button>
        </div>
    </header>

    <!-- Summary small -->
    <section class="grid grid-cols-3 gap-4 mb-6">
        <div class="rounded-lg p-4 bg-white border border-slate-100 shadow-sm">
            <div class="text-xs text-slate-500">Total</div>
            <div class="mt-1 text-xl font-semibold">12</div>
        </div>
        <div class="rounded-lg p-4 bg-white border border-slate-100 shadow-sm">
            <div class="text-xs text-slate-500">Selesai hari ini</div>
            <div class="mt-1 text-xl font-semibold text-emerald-600">7</div>
        </div>
        <div class="rounded-lg p-4 bg-white border border-slate-100 shadow-sm">
            <div class="text-xs text-slate-500">Belum</div>
            <div class="mt-1 text-xl font-semibold text-rose-600">5</div>
        </div>
    </section>

    <!-- Table / List -->
    <section>
        <div class="overflow-hidden rounded-lg border border-slate-100 bg-white shadow">
            <table class="min-w-full divide-y divide-slate-100">
                <thead class="bg-slate-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Nama
                            Kebiasaan</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 text-right text-xs font-medium text-slate-500 uppercase tracking-wider">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <!-- Contoh baris - ganti dengan loop server-side Anda -->
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">1</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-slate-800">Berolahraga</div>
                            <div class="text-xs text-slate-500">Push-up 20x / Jalan 30 menit</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">✔
                                Selesai</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:underline">Detail</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">2</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-slate-800">Baca 30 menit</div>
                            <div class="text-xs text-slate-500">Buku pengembangan diri</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700">—
                                Belum</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:underline">Detail</a>
                        </td>
                    </tr>

                    <!-- Template row (untuk direplikasi) -->
                    <tr class="hover:bg-slate-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">3</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-slate-800">Meditasi</div>
                            <div class="text-xs text-slate-500">10 menit per hari</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <!-- Gunakan kondisi server-side untuk memilih badge yang sesuai -->
                            <span
                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">✔
                                Selesai</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:underline">Detail</a>
                        </td>
                    </tr>

                </tbody>
            </table>

            <!-- Pagination (UI only) -->
            <div class="flex items-center justify-between px-4 py-3 border-t border-slate-100 bg-slate-50">
                <div class="text-sm text-slate-600">Menampilkan <span class="font-medium">1-10</span> dari <span
                        class="font-medium">12</span></div>
                <div class="flex items-center gap-2">
                    <button class="px-3 py-1 rounded border border-slate-200 text-sm">Sebelumnya</button>
                    <button class="px-3 py-1 rounded bg-indigo-600 text-white text-sm">1</button>
                    <button class="px-3 py-1 rounded border border-slate-200 text-sm">2</button>
                    <button class="px-3 py-1 rounded border border-slate-200 text-sm">Selanjutnya</button>
                </div>
            </div>

        </div>
    </section>

    <!-- Tips kecil -->
    <footer class="mt-6 text-sm text-slate-500">Tip: Ganti baris contoh di table dengan loop server-side Anda. Gunakan
        badge berwarna (emerald untuk selesai, rose untuk belum) berdasarkan nilai <code>is_done</code>.</footer>
</div>
