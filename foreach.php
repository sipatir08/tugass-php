<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    <h2>Penggunaan kontrol foreach</h2>
    <b>Nama bulan : </b><br>
    <?php
    $i=0;
    $bulan=array("januari","Februri","Maret","April",
    "Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    foreach($bulan as $bln)
    {
        echo (($i + 1)." $bln <br>");
    }
    ?>
</body>
</html>