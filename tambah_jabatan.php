<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Jabatan</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Jabatan</h3>
        <form action="proses_tambah_jabatan.php" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan:</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok:</label>
                <input type="number" id="gaji_pokok" name="gaji_pokok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tunjangan" class="form-label">Tunjangan:</label>
                <input type="number" id="tunjangan" name="tunjangan" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah Jabatan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
