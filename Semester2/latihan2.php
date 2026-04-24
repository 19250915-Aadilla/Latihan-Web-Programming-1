<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Kota di Indonesia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Mengambil font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-light" style="font-family: 'Poppins', sans-serif;">

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Kota di Indonesia</h1>
            <p class="lead">Eksplorasi ragam keindahan kota-kota besar di nusantara</p>
        </div>
    </header>

    <div class="container my-5">
        <div class="row">
            <!-- Sidebar / Navigasi -->
            <aside class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Pilih Kota</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" class="text-decoration-none active">Jakarta</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none">Depok</a></li>
                            <li class="list-group-item"><a href="#" class="text-decoration-none">Surabaya</a></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Konten Utama -->
            <main class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-primary">Jakarta</h2>
                        <p class="card-text">Jakarta adalah ibu kota Indonesia yang penuh dengan kehidupan urban, budaya, dan sejarah.</p>

                        <h3 class="mt-4">Form Input Data</h3>
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="ttl" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="ttl" name="ttl" required>
                            </div>
                            <div class="mb-3">
                                <label for="nilai_tugas_1" class="form-label">Nilai Tugas 1</label>
                                <input type="number" class="form-control" id="nilai_tugas_1" name="nilai_tugas_1" required>
                            </div>
                            <div class="mb-3">
                                <label for="nilai_tugas_2" class="form-label">Nilai Tugas 2</label>
                                <input type="number" class="form-control" id="nilai_tugas_2" name="nilai_tugas_2" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                        </form>

                        <?php if (isset($_POST['kirim'])): ?>
                            <div class="mt-4">
                                <h4>Hasil Input:</h4>
                                <p><strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama'] ?? ''); ?></p>
                                <p><strong>Nomor HP:</strong> <?php echo htmlspecialchars($_POST['no_hp'] ?? ''); ?></p>
                                <p><strong>Tanggal Lahir:</strong> <?php echo htmlspecialchars($_POST['ttl'] ?? ''); ?></p>
                                <p><strong>Nilai Tugas 1:</strong> <?php echo htmlspecialchars($_POST['nilai_tugas_1'] ?? '0'); ?></p>
                                <p><strong>Nilai Tugas 2:</strong> <?php echo htmlspecialchars($_POST['nilai_tugas_2'] ?? '0'); ?></p>
                                <p><strong>Total Nilai:</strong> <?php echo (float)($_POST['nilai_tugas_1'] ?? 0) + (float)($_POST['nilai_tugas_2'] ?? 0); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 Eksplorasi Kota Indonesia. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    
    <footer>
        &copy; 2023 Informasi Kota Indonesia | Dibuat dengan &hearts;
    </footer>

</body>
</html>