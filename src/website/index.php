<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/variables.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="head">
            <h1>Minecraft-Server-Dashboard</h1>
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <span class="slider"></span>
                <img src="img/lamp-off.jpg" class="off">
                <img src="img/lamp-on.jpg" class="on">
            </label>
        </header>
        <main>
            <div class="online-div">
                <a class="online-item" href="server-home.php?server=1">
                    <div class="online-content">
                        <h2>Some Online Server 1</h2>
                        <h3>ip: main.intimimtem-mc.de</h3>
                        <h3>Version 1.21.2 Paper, no Plugins</h3>
                        <h3>1/4 Players</h3>
                    </div>
                    <div class="green-line"></div>
                </a>
                <a class="online-item" href="server-home.php?server=2">
                    <div class="online-content">
                        <h2>Some Online Server 2</h2>
                        <h3>ip: second.intimimtem-mc.de</h3>
                        <h3>Version 1.21.2 Paper, no Plugins</h3>
                        <h3>3/12 Players</h3>
                    </div>
                    <div class="green-line"></div>
                </a>
            </div>
            <div class="offline-div">
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 1</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 2</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 3</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 4</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 5</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 6</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
                <a class="offline-item" href="server-home.php?server=1">
                    <h3>Some Server Name 7</h3>
                    <h4>Version 1.21.2 Paper, no Plugins</h4>
                </a>
            </div>
        </main>
        <script src="js/theme.js"></script>
    </body>
</html>