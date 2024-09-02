<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tampil Pegawai</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Tampil Pegawai</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>NO TELEPON</th>
                    <th>JABATAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai");
                $no = 0;
                while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                    $no++;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pegawai['Nik'] ?></td>
                    <td><?= $data_pegawai['Nama'] ?></td>
                    <td><?= $data_pegawai['Alamat'] ?></td>
                    <td><?= $data_pegawai['Jenis_kelamin'] ?></td>
                    <td><?= $data_pegawai['No_tlp'] ?></td>
                    <td><?= $data_pegawai['Jabatan'] ?></td>
                    <td>
                        <a href="ubah_pegawai.php?id=<?= $data_pegawai['Id'] ?>" class="btn btn-success">Ubah</a> |
                        <a href="hapus.php?id=<?= $data_pegawai['Id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
