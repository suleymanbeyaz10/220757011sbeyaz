<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bağlantılar Sayfası</title>
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
        #links-section {
            margin: 20px;
        }
        .link-block {
            background-color: #555;
            padding: 15px;
            margin: 10px;
            border-radius: 10px;
        }
        .link-block a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Faydalı Bağlantılar</h1>
    </header>
    
    <section id="links-section">
        <div class="link-block">
            <h3>Örnek Bağlantı 1</h3>
            <p>Açıklama veya detaylar buraya eklenebilir.</p>
            <a href="https://www.example.com" target="_blank">Linki Ziyaret Et</a>
        </div>

        <div class="link-block">
            <h3>Örnek Bağlantı 2</h3>
            <p>Açıklama veya detaylar buraya eklenebilir.</p>
            <a href="https://www.example.com" target="_blank">Linki Ziyaret Et</a>
        </div>

        <div class="link-block">
            <h3>Örnek Bağlantı 3</h3>
            <p>Açıklama veya detaylar buraya eklenebilir.</p>
            <a href="https://www.example.com" target="_blank">Linki Ziyaret Et</a>
        </div>
    </section>

    <?php include 'navbar.php'; ?>
</body>
</html>
