<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Berber Randevu Sistemi</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #1f1f1f, #3a3a3a);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #ffffff;
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #222;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 18px;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #000;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #000;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #444;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="card">
    <h2> Berber Randevu Sistemi </h2>

    <form method="post" action="<?= site_url('ogrenci/kaydet') ?>">

        <label>Ad Soyad</label>
        <input type="text" name="ogrenci_adi" placeholder="Adınızı girin" required>

        <label>Gün Seç</label>
        <select name="ders" required>
            <option value="">Gün seçiniz</option>
            <option value="Pazartesi">Pazartesi</option>
            <option value="Salı">Salı</option>
            <option value="Çarşamba">Çarşamba</option>
            <option value="Perşembe">Perşembe</option>
            <option value="Cuma">Cuma</option>
            <option value="Cumartesi">Cumartesi</option>
        </select>

        <label>Saat Seç</label>
        <select name="vize" required>
            <option value="">Saat seçiniz</option>
            <option value="9">09:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
        </select>

        <!-- DB istiyor diye gizli -->
        <input type="hidden" name="final" value="0">

        <button type="submit">Randevu Al</button>
    </form>


</div>

</body>
</html>
