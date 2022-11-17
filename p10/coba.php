<?php
$mahasiswa =["Rizky", "2110803006", "Sistem Informasi", "abcd@gmail.com"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs): ?>
        <li><?php echo $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>