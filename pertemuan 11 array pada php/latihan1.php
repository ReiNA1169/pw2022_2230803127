<?php
$asean = [

["indonesia", "sinagpura", "malaysia", "brunei", "thailand", "laos", "filipina", "myanmar"],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar negara asean awal</h1>
    <?php foreach ($asean as $asn) : ?>
        <ul>
            <li><?= $asn[0]; ?></li>
            <li><?= $asn[1]; ?></li>
            <li><?= $asn[2]; ?></li>
            <li><?= $asn[3]; ?></li>
            <li><?= $asn[4]; ?></li>
        </ul>  
        <?php endforeach; ?>

        <h1>Daftar negara baru</h1>
    <?php foreach ($asean as $asn) : ?>
        <ul>
            <li><?= $asn[0]; ?></li>
            <li><?= $asn[1]; ?></li>
            <li><?= $asn[2]; ?></li>
            <li><?= $asn[3]; ?></li>
            <li><?= $asn[4]; ?></li>
            <li><?= $asn[5]; ?></li>
            <li><?= $asn[6]; ?></li>
        </ul>  
        <?php endforeach; ?>
</body>
</html>