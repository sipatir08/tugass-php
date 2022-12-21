<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif</title>
</head>
<body>
    <h2>Penggunaan kontrol else if</h2>
    <form>
        <?php
        $nilai=00;
        echo("nilai $nilai");
        if($nilai>-05)
        {
            echo("Grade A");
            if (($nilai>=75) and ($nilai<85));
        }
        {
            echo("Grade B");
            if (($nilai>=65) and ($nilai75));
        }
        {
            echo("Grade C");
            if (($nilai>=50) and ($nilai<65));
        }
        {
            echo("Grade D");
            if (($nilai<50));
        }
        {
            echo("Grade E");
        }
        ?>
    </form>
</body>
</html>