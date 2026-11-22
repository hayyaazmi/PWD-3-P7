<?php
    require('datahewan.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $kucing = new Kucing();
        $anjing = new Anjing();

        $kucing->SetNama("Juju");
        $kucing->SetUmur(3);

        $anjing->SetNama("Kuku");
        $anjing->SetUmur(7);

        echo "Jenis : ".$kucing->GetJenis();
        echo "<br>Nama ".$kucing->GetJenis()."  : ".$kucing->GetNama();
        echo "<br>Umur ".$kucing->GetJenis()."  : ".$kucing->GetUmur()." Tahun";
        echo "<br>Suara ".$kucing->GetJenis()." : ".$kucing->GetSuara();

        echo "<br><br>Jenis : ".$anjing->GetJenis();
        echo "<br>Nama ".$anjing->GetJenis()."  : ".$anjing->GetNama();
        echo "<br>Umur ".$anjing->GetJenis()."  : ".$anjing->GetUmur()." Tahun";
        echo "<br>Suara ".$anjing->GetJenis()." : ".$anjing->GetSuara();
    ?>
</body>
</html>