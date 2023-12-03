<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sayfası</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
        }
        header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: #fff;
        }
        #contact-section {
            margin: 20px;
        }
        .contact-block {
            background-color: #FFC107;
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> <br>
    <header style="margin: 20px;">
        <h1>Benimle İletişime Geçin</h1>
    </header>
    
    <section id="contact-section">
        <div class="contact-block">
            <h3>Adres Bilgisi</h3>
            <p>İstanbul, Turkey</p>
        </div>

        <div class="contact-block">
            <h3>Email</h3>
            <p>suleymanbeyaz10@gmail.com</p>
        </div>

        <div class="contact-block">
            <h3>Telefon</h3>
            <p>+90 123 456 78 90</p>
        </div>
    </section>

</body>
</html>
