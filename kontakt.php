<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="site-header">

        <div class="wrapper flex-parent">
            <a href="index.php">
                <img src="img/logo.png" class="logo">
            </a>
            <form action="" class="search-form">
                <input type="text" placeholder="Jeg leder efter..." class="search-field">
                <button class="search-btn" type="button">
                    <img src="img/search.png" alt="søg" class="search-icon">
                </button>
            </form>
        </div><!-- wrapper-->

        <nav class="site-navigation">
            <div class="wrapper">
                <label for="menu-check">
                    <img src="img/burger-icon.png" alt="Menu">
                </label>
                <input type="checkbox" class="menu-check" id="menu-check" style="display:none;">
                <ul class="menu-items flex-parent-right">
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="foto-album.php">Mit fotoalbum</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </div> <!-- wrapper -->
        </nav>

    </header>

    <div class="wrapper box-shadow flex-parent">

        <main class="main-content">
            <h1>Kontakt mig</h2>
            <form action="" class="contact-form">
                <input type="text" name="navn" id="navn" placeholder="Navn" required>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <textarea placeholder="Din besked..." required></textarea>
                <input type="checkbox" name="nyhedsbrev" id="nyhedsbrev">
                <label>Tilmeld dig nyhedsbrev</label>
                <input type="submit" value="send">
            </form>
        </main>

        <aside class="sidebar">
            <h2>Kontaktoplysninger</h2>
            <section>
                <h3>Arnes Portfolio</h3>
                <p>Paradisæblevej 13</p>
                <p>1313 Andeby</p>
            </section>
        </aside>

    </div><!-- wrapper / box-shadow -->

    <footer class="site-footer">
        <div class="wrapper flex-parent">
            <section>
                <h3>Arnes Portfolio</h3>
                <p>
                    Paradisæblevej 13
                </p>
                <p>
                    1313 Andeby
                </p>
            </section>
            <section>
                <h3>Get in touch</h3>
                <a href="#">Kontakt</a>
                <a href="#">Facebook</a>
            </section>
            <section>
                <h3>Privatlivspolitik</h3>
                <a href="#">Cookies</a>
                <a href="#">GDPR</a>
            </section>

        </div>
    </footer>

</body>
</html>