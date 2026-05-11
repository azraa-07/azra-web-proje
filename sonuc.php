<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Form Sonucu</title>

    <link rel="stylesheet"
          href="style.css">
</head>

<body>

<div class="sonuc-kutu">

    <h1>Gönderilen Bilgiler</h1>

    <p>
        <strong>Ad Soyad:</strong>

        <?php echo $_POST["adsoyad"]; ?>
    </p>

    <p>
        <strong>E-posta:</strong>

        <?php echo $_POST["email"]; ?>
    </p>

    <p>
        <strong>Telefon:</strong>

        <?php echo $_POST["telefon"]; ?>
    </p>

    <p>
        <strong>Konu:</strong>

        <?php echo $_POST["konu"]; ?>
    </p>

    <p>
        <strong>Mesaj:</strong>

        <?php echo $_POST["mesaj"]; ?>
    </p>

</div>

</body>
</html>