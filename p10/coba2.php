<?php
$mahasiswa =[["Rizky", "2110803006", "Sistem Informasi", "abcd@gmail.com"],
                ["Agus", "2110803010", "Biologi", "asd@gmail.com"],
                ["Kalek", "2110803014", "Kimia", "fjkdds@gmail.com"],
                ["Rico", "2110803007", "Biologi", "fhfiuf@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) {?>
    <ul>
    <li><?= $mhs[0]; ?></li>
    <li><?= $mhs[1]; ?></li>
    <li><?= $mhs[2]; ?></li>
    <li><?= $mhs[3]; ?></li>
    </ul>
    <?php }?>
</body>
</html>