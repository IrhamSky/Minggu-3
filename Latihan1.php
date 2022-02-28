<?php
$mahasiswa = [
    [
        "nim" => "21520024",
        "nama" => "Irham",
        "jurusan" => "Sistem Informasi",
        "email" => "irham@stimata.ac.id",
        "gambar" => "irham.jpg"
    ],

    [
        "nim" => "21520020",
        "nama" => "Dhamar",
        "jurusan" => "Sistem Informasi",
        "email" => "Dhamar@stimata.ac.id",
        "gambar" => "Dhamar.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a 
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim= <?= $mhs["nim"]; ?>&
                jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?=
                $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>

</body>

</html>