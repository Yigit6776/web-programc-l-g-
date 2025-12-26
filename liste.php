<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Randevu / Kayıt Listesi</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #1e1e1e, #3a3a3a);
            min-height: 100vh;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        .info {
            line-height: 1.5;
        }

        .name {
            font-weight: bold;
            font-size: 16px;
            color: #222;
        }

        .detail {
            color: #555;
            font-size: 14px;
        }

        .delete {
            background: #e74c3c;
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 13px;
            transition: 0.3s;
        }

        .delete:hover {
            background: #c0392b;
        }

        .back {
            text-align: center;
            margin-top: 30px;
        }

        .back a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            border: 1px solid #fff;
            padding: 8px 14px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .back a:hover {
            background: #fff;
            color: #000;
        }
    </style>
</head>
<body>

<h1>📋 Kayıt / Randevu Listesi</h1>

<div class="container">

<?php foreach ($ogrenciler as $o): ?>
    <div class="card">
        <div class="info">
            <div class="name"><?= esc($o['ogrenci_adi']) ?></div>
            <div class="detail">
                <?= esc($o['ders']) ?> |
                Saat: <?= esc($o['vize']) ?>
            </div>
        </div>

        <a 
            href="<?= site_url('ogrenci/sil/'.$o['id']) ?>"
            class="delete"
            onclick="return confirm('Bu kaydı silmek istiyor musun?')"
        >
            🗑 Sil
        </a>
    </div>
<?php endforeach; ?>

</div>

<div class="back">
    <a href="<?= site_url('ogrenci') ?>">➕ Yeni Kayıt Ekle</a>
</div>

</body>
</html>
