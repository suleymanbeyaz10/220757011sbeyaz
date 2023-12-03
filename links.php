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
    <?php include 'navbar.php'; ?>
    <br>
    <header>
        <h1>Bağlantılar</h1>
    </header>
    
    <section id="links-section">
        <div class="link-block">
            <h3>LinkedIn</h3>
            <p>Sosyal Medya</p>
            <a href="https://www.linkedin.com/in/suleymanbeyaz/" target="_blank">Linki Ziyaret Et</a>
        </div>

        <div class="link-block">
            <h3>Github</h3>
            <p>Projeler ve Çalışmalar</p>
            <a href="https://github.com/suleymanbeyaz10" target="_blank">Linki Ziyaret Et</a>
        </div>

        <div class="link-block">
            <h3>Youtube</h3>
            <p></p>
            <a href="https://www.youtube.com/@bymahone" target="_blank">Linki Ziyaret Et</a>
        </div>
    </section>

</body>
</html>
