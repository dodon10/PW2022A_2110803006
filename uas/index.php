<?php
// koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
var_dump($result);
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th >No.</th >
    <th >Aksi</th >
    <th >Gambar</th >
    <th >NIM</th >
    <th >Nama</th >
    <th >Email</th >
    <th >Jurusan</th >
</tr>

<tr>
    <td>1</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/kicing2.jpg" width="50"  ></td>
    <td>2110803006</td>
    <td>Rizky</td>
    <td>rizky@gmail.com</td>
    <td>sistem Informasi</td>
</tr>
</table>
    
</body>
</html>