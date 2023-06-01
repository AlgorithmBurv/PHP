<?php 

// $mahasiswa = [
//     ["Maman", "121", "mamn@gmail", "TI"],
//     ["Ali", "021", "alii@gmail", "Komuniasi"],
//     ["Jajang", "221", "jjang@gmail", "Math"],
//     ["Edun", "321", "eaduean@gmail", "Budaya"],
//     ["Kolot", "421", "olot@gmail", "Bahasa"]
// ];

//array asociative
//keynya adalah string
$mahasiswa =[ 
     ["nama"=>"Maman", "NIM"=>"121","email"=> "mamn@gmail", "jurusan"=>"TI","gambar"=>"foto2 (1).jpg"],
     ["nama"=>"Sabenan", "NIM"=>"467","email"=> "dfugwfg@gmail", "jurusan"=>"Ekonomi","gambar"=>"foto4 (2).jpg"],
     
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>" alt="">
        </li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["NIM"]; ?></li>
        <li><?= $mhs["email"]; ?></li>
        <li><?= $mhs["jurusan"]; ?></li>
        
    </ul>
    <?php endforeach ?>
</body>
</html>