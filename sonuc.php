<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hesaplanan Geçme Notu</title>
</head>
<body>

<h2>Hesaplanan Geçme Notu</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Öğrenci Adı</th>
        <th>Ders</th>
        <th>Vize</th>
        <th>Final</th>
        <th>Hesaplanan Geçme Notu</th>
    </tr>
    <tr>
        <td><?= $ogrenci_adi ?></td>
        <td><?= $ders ?></td>
        <td><?= $vize ?></td>
        <td><?= $final ?></td>
        <td><?= number_format($ortalama, 2) ?></td>
    </tr>
</table>

<br>
<a href="<?= base_url('ogrenci') ?>">Geri Dön</a>

</body>
</html>
