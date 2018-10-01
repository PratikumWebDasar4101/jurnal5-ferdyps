<!DOCTYPE html>
<html>
<head>
    <title>Komentar</title>
</head>
<body>
    <form method="post">
        Komentar : <br>
        <textarea name="komentar" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $komentar=$_POST['komentar'];

        $hitung = strlen($komentar);
        if ($hitung < 5) {
            echo "jumlah komentar kurang dari 5 kata";
        }
        else{
            echo "jumlah komentar : $hitung";
        }
    }
?>
