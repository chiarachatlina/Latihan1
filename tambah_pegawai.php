<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Pegawai</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Pegawai</h3>
        <form action="proses_tambah_pegawai.php" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="text" id="nik" name="nik" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="no_tlp" class="form-label">No. Telepon:</label>
                <input type="text" id="no_tlp" name="no_tlp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah Pegawai</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
