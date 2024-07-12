<!-- resources/views/creator.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .social-links a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mt-5">Tentang Kami</h1>
                <div class="mt-4">
                    <p>Website ini dibuat untuk memberikan informasi tentang zodiak kepada pengguna. Informasi di sini bersifat informatif dan menghibur.</p>
                    <p>Website ini dikembangkan oleh Andi Muhammad Nauval Ramadhan sebagai bagian dari pembelajaran dan pengembangan aplikasi web menggunakan Laravel.</p>
                    <p>Saya kuliah di Universitas Pembangunan Jaya jurusan Sistem Informasi. Angkatan 23</p>
                    <p>Jika Anda memiliki pertanyaan lebih lanjut atau ingin memberikan masukan, silakan hubungi kami di bawah ini.</p>
                </div>

                <!-- Tautan untuk media sosial -->
                <div class="social-links">
                    <a href="https://www.instagram.com/yanginiandi" class="btn btn-primary" target="_blank">Instagram</a>
                    <!-- Ganti `namapengguna_anda` dengan username Instagram Anda -->
                    <a href="https://github.com/SummerFHD" class="btn btn-secondary" target="_blank">Profil GitHub</a>
                    <!-- Ganti `https://www.profilanda.com` dengan URL profil Anda -->
                </div>

                <div class="text-center mt-4">
                    <a href="/" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
