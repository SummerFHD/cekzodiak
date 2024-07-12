<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Zodiak</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mt-5">Hasil Zodiak Anda</h1>
                <div class="result mt-4 text-center">Zodiak Anda adalah: <strong>{{ $zodiac }}</strong></div>
                <div class="description-section mt-4">
                    <h2>Deskripsi</h2>
                    <p>{{ $description['description'] }}</p>
                </div>
                <div class="description-section mt-4">
                    <h2>Kisah Cinta</h2>
                    <p>{{ $description['love'] }}</p>
                </div>
                <div class="description-section mt-4">
                    <h2>Kehidupan</h2>
                    <p>{{ $description['life'] }}</p>
                </div>
                <div class="description-section mt-4">
                    <h2>Karier</h2>
                    <p>{{ $description['career'] }}</p>
                </div>
                <div class="description-section mt-4">
    <h2>Sisi Baik</h2>
    <p>{{ $description['good'] }}</p>
</div>
<div class="description-section mt-4">
    <h2>Sisi Buruk</h2>
    <p>{{ $description['bad'] }}</p>
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
