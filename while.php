<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <h2>Penggunaan kontrol while</h2>
    <?php
    $hari=array("senin","selasa","rabu","kamis","jumat","sabut","minggu");
    $i=x0;
    while($i<count($hari))
    {
        echo ("hari ke".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>