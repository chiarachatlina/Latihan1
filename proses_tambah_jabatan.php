<?php
if ($_POST) {
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $tunjangan = $_POST['tunjangan'];

    // Validasi input
    if (empty($nama_jabatan)) {
        echo "<script>alert('Nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($gaji_pokok) || !is_numeric($gaji_pokok)) {
        echo "<script>alert('Gaji pokok harus diisi dengan angka');location.href='tambah_jabatan.php';</script>";
    } elseif (empty($tunjangan) || !is_numeric($tunjangan)) {
        echo "<script>alert('Tunjangan harus diisi dengan angka');location.href='tambah_jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO table_jabatan (Nama_jabatan, Gaji_pokok, Tunjangan) VALUES ('".$nama_jabatan."', '".$gaji_pokok."', '".$tunjangan."')");
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>
