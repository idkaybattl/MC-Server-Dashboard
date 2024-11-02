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
                    <a class="material-symbols-rounded">home</a>
                    <p class="icon_name">Home</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">keyboard</a>
                    <p class="icon_name">Console</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">history</a>
                    <p class="icon_name">Logs</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">settings</a>
                    <p class="icon_name">Properties</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">stacks</a>
                    <p class="icon_name">Version</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">landscape</a>
                    <p class="icon_name">World</p>
                </div>
                <div>
                    <a class="material-symbols-rounded">monitoring</a>
                    <p class="icon_name">Status</p>
                </div>
            </span>
            <span>
                <div class="theme-switch-div">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox">
                        <span class="slider"></span>
                        <img src="img/lamp-off.jpg" class="off">
                        <img src="img/lamp-on.jpg" class="on">
                    </label>
                </div>
                <div>
                    <a class="material-symbols-rounded" onclick="expand_nav()" id="expand_arrow">arrow_forward_ios</a>
                </div>
                <div>
                    <a class="material-symbols-rounded logout" href="index.php">logout</a>
                </div>
            </span>
        </nav>
        <main>
            
        </main>
        <script src="js/theme.js"></script>
    </body>
</html>