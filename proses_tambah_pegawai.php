<?php
if ($_POST) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $jabatan = $_POST['jabatan'];

    // Validasi input
    if (empty($nik)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($nama)) {
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($no_tlp)) {
        echo "<script>alert('No. telepon tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($jabatan)) {
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO pegawai (Nik, Nama, Alamat, Jenis_kelamin, No_tlp, Jabatan) VALUES ('".$nik."', '".$nama."', '".$alamat."', '".$jenis_kelamin."', '".$no_tlp."', '".$jabatan."')") or die(mysqli_error($conn));
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
