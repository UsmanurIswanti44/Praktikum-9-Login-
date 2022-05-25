<?php
//untuk menghubungkan php dan database
include("koneksi.inc.php");

//unuk mengecek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['simpan'])){

    //mengambil data dari formulir
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $pesan = $_POST['pesan'];

    //buat query
    $sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) VALUE ('$nama', '$jkel', '$email', '$alamat','$kota', '$pesan')";
    $query = mysqli_query($conn, $sql);
    
    // perintah untuk mengetahui apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman cetak.php dengan status=sukses
        header('Location: cetak2.php?status=sukses');
        // kalau gagal alihkan ke halaman cetak.php dengan status=gagal
        header('Location: cetak2.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>