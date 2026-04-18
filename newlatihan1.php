<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800">
    <div class="max-w-5xl mx-auto p-6">
        <header class="mb-8 rounded-3xl bg-gradient-to-r from-sky-600 to-cyan-400 p-8 text-white shadow-xl shadow-sky-200/50">
            <h1 class="text-4xl font-semibold tracking-tight">Daftar Kontak</h1>
            <p class="mt-3 max-w-2xl text-lg text-sky-100">Tabel responsif dengan desain baru dan baris data yang diperbarui.</p>
        </header>

        <main class="space-y-6">
            <section class="rounded-3xl bg-white p-6 shadow-lg shadow-slate-200/80">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900">Informasi Peserta</h2>
                        <p class="text-slate-600">Lihat data terbaru di bawah ini.</p>
                    </div>
                    <button class="inline-flex items-center justify-center rounded-full bg-sky-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-sky-700">Tambah Baru</button>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-[0.12em] text-slate-600">Nama</th>
                                <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-[0.12em] text-slate-600">Usia</th>
                                <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-[0.12em] text-slate-600">No HP</th>
                                <th class="px-4 py-3 text-left text-sm font-semibold uppercase tracking-[0.12em] text-slate-600">Kota</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-white">
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-4 text-slate-700">John Doe</td>
                                <td class="px-4 py-4 text-slate-700">30</td>
                                <td class="px-4 py-4 text-slate-700">08123456789</td>
                                <td class="px-4 py-4 text-slate-700">Jakarta</td>
                            </tr>
                            <tr class="bg-slate-50 hover:bg-slate-100">
                                <td class="px-4 py-4 text-slate-700">Sekar</td>
                                <td class="px-4 py-4 text-slate-700">19</td>
                                <td class="px-4 py-4 text-slate-700">08987654321</td>
                                <td class="px-4 py-4 text-slate-700">Bandung</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-4 text-slate-700">Rina</td>
                                <td class="px-4 py-4 text-slate-700">25</td>
                                <td class="px-4 py-4 text-slate-700">082112345678</td>
                                <td class="px-4 py-4 text-slate-700">Surabaya</td>
                            </tr>
                            <tr class="bg-slate-50 hover:bg-slate-100">
                                <td class="px-4 py-4 text-slate-700">Budi</td>
                                <td class="px-4 py-4 text-slate-700">22</td>
                                <td class="px-4 py-4 text-slate-700">081298765432</td>
                                <td class="px-4 py-4 text-slate-700">Yogyakarta</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="px-4 py-4 text-slate-700">Maya</td>
                                <td class="px-4 py-4 text-slate-700">27</td>
                                <td class="px-4 py-4 text-slate-700">085712345678</td>
                                <td class="px-4 py-4 text-slate-700">Bali</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>