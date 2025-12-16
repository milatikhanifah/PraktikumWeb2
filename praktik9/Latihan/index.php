<<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Kirim Email</title>

     <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Segoe UI', Tahoma, sans-serif;
    }

    .form-container {
        width: 420px;
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        animation: fadeIn 0.8s ease-in-out;
    }

    .title {
        color: #6a11cb;
        font-weight: 700;
    }

    .form-label {
        font-weight: 600;
    }

    .btn-primary {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        border: none;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .btn-primary:hover {
        opacity: 0.9;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>

<div class="form-container">
    <h3 class="text-center title mb-3">Form Kirim Email</h3>
    <p class="text-center text-muted mb-4">Mengirim notifikasi menggunakan PHPMailer</p>

    <form action="proses.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subjek</label>
            <input type="text" name="subjek" class="form-control" placeholder="Masukkan Subjek" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea name="pesan" class="form-control" rows="4" placeholder="Tulis pesan"></textarea>
        </div>

        <button type="submit" name="kirim" class="btn btn-primary w-100">
            Kirim Notifikasi
        </button>

    </form>
</div>

</body>
</html>