<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Zodiak</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5">Cek Zodiak Anda</h1>
                <form action="/cek-zodiak" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="birthdate">Masukkan Tanggal Lahir (hari/bulan/tahun):</label>
                        <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="dd/mm/yyyy" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Cek Zodiak</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Tambahkan tautan untuk "Tentang Kami" di sini -->
                <div class="text-center mt-4">
                    <a href="/tentang-kami" class="btn btn-info">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
