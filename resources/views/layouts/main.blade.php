<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- style bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styles.css">

        <!-- script jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <!-- Script do site -->
        <script src="js/script.js"></script>

    </head>
    <body>
        <header id="menu">
            <a id="logo" href="./"><img src="img/logo.jpg" alt="Logo"></a>
            <ul>
                <li><a id="usuario"><img src="img/user-icon.png" alt="Icone de usuário"></a>
                    <ul id="sub-menu">
                        <li><a href="">Perfil</a></li>
                        <li><a href=""></a></li>
                        <li><a href="">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </header>
        <aside id="menu-lateral">
            
        </aside>
        @yield('content')
        <footer id="rodape">
            <p class="text-center">&copy; 2021 | Sys Finance - created by <a href="https://www.instagram.com/dev.thiagosite/">Thiago S. Viana</a></p>
        </footer>
    </body>
</html>
