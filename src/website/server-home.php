<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/server-home.css">
        <link rel="stylesheet" href="css/variables.css">

        <script src="js/server-home.js"></script>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,0,-25"/>
    </head>
    <body>
        <nav id="nav">
            <span>
                <div>
                    <a class="material-symbols-rounded icon">home</a>
                    <a class="icon_name">Overview</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">keyboard</a>
                    <a class="icon_name">Console</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">manage_accounts</a>
                    <a class="icon_name">Players</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">backup</a>
                    <a class="icon_name">Backups</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">history</a>
                    <a class="icon_name">Logs</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">settings</a>
                    <a class="icon_name">Properties</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">stacks</a>
                    <a class="icon_name">Version</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">landscape</a>
                    <a class="icon_name">World</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon">monitoring</a>
                    <a class="icon_name">Status</a>
                </div>
            </span>
            <span>
                <div class="theme-switch-div-div">
                    <div class="theme-switch-div">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <span class="slider"></span>
                            <img src="img/lamp-off.jpg" class="off">
                            <img src="img/lamp-on.jpg" class="on">
                        </label>
                    </div>
                    <a class="icon_name">Theme</a>
                </div>
                <div>
                    <a class="material-symbols-rounded icon" onclick="expand_nav()" id="expand_arrow">arrow_forward_ios</a>
                    <a class="icon_name" onclick="expand_nav()">Contract</a>
                </div>
                <div>
                    <a class="material-symbols-rounded logout icon" href="index.php">logout</a>
                    <a class="icon_name" href="index.php">Back</a>
                </div>
            </span>
        </nav>
        <main>
            <header></header>
            <section></section>
            <section></section>
        </main>
        <script src="js/theme.js"></script>
    </body>
</html>