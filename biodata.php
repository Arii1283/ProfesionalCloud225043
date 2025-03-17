<?php
    $nama = "Bambang Ary Ariyansha";
    $nim = "225043";
    $jurusan = "Rekayasa Perangkat Lunak - S1";
    $email = "bambangariansyah09@gmail.com";
    $telepon = "085343586532";
    $alamat = "Jl. Berua Raya Perumahan Griya Intan Lestari Blok C1/8C, Kota Makassar";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><?php echo $telepon; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>
    </table>
</body>
</html>