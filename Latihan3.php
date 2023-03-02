<?php
$mobil = [
    [
        'gambar' => 'img/gb1.jpg',
        'nama' => "Toyota Avanza",
        'transmisi' => "Manual",
        'mesin' => "1300 CC",
        'harga' => "250 Juta"
    ],
    [
        'gambar' => 'img/gb2.jpg',
        'nama' => "Kijang Innova",
        'transmisi' => "Otomatis",
        'mesin' => "2000 CC",
        'harga' => "500 Juta"
    ],
    [
        'gambar' => 'img/gb3.jpg',
        'nama' => "Toyota Alphard",
        'transmisi' => "Otomatis",
        'mesin' => "3500 CC",
        'harga' => "1,5 Milyar"
    ],
    [
        'gambar' => 'img/gb4.jpg',
        'nama' => "Honda Brio",
        'transmisi' => "Manual",
        'mesin' => "1200 CC",
        'harga' => "200 Juta"
    ],
    [
        'gambar' => 'img/gb5.jpg',
        'nama' => "Honda Civic",
        'transmisi' => "Otomatis",
        'mesin' => "1500 CC",
        'harga' => "600 Juta"
    ],
    [
        'gambar' => 'img/gb6.jpg',
        'nama' => "Honda Odyssey",
        'transmisi' => "Otomatis",
        'mesin' => "2400 CC",
        'harga' => "900 Juta"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List mobil</title>
    <style>
        body {
            font-family: 'Franklin Gothic', Arial, sans-serif;
            padding: 20px;
        }

        .baris {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .kolom {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }


        .kotak {
            background-color: #fff;
            margin-top: 20px;
            padding: 20px;
            border-radius: 3px;
            box-shadow: 0 1px 40px 0 rgb(0 0 0 / 30%);
            margin-right: 20px;
        }

        .kotak img {
            width: 100px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="baris">
        <?php foreach ($mobil as $r) : ?>
            <div class="kotak">
                <div class="baris">
                    <img src="<?= $r['gambar'] ?>" />
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $r['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Transmisi</td>
                            <td>:</td>
                            <td><?= $r['transmisi'] ?></td>
                        </tr>
                        <tr>
                            <td>Mesin</td>
                            <td>:</td>
                            <td><?= $r['mesin'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><?= $r['harga'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>