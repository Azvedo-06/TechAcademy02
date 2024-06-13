<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/logomarca1.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <header class="header">
        <a href="home" class="header-logo">
            <img src="imagens/logomarca1.png" alt="Logo-ARZ" title="logo-ARZ" class="logo-img">
        </a>
        
        <a href="javascript: mostrarMenu()" title="menu" class="header-menu ">
            <i class="fa-solid fa-bars"></i>
        </a>
        
        <ul class="opn">
            <li>
                <a href="opiniao" title="Deixe sua opinião">
                    Deixe sua opinião
                </a>
            </li>
        </ul>
        
        <nav class="nav-header">
            <ul>
                <li>
                    <a href="home" title="Home">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="equipe" title="Equipe">
                        <i class="fa-solid fa-user-group"></i>
                        Equipe
                    </a>
                </li>
                <li>
                    <a href="contato" title="Contato">
                        <i class="fa-solid fa-phone"></i>
                        Contato
                    </a>
                </li>
                <li class="nav-item dropdown"  data-bs-theme="dark">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  title="Jogos" aria-expanded="false">
                        <i class="fa-solid fa-gamepad"></i>
                        Sobre Os Jogos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dangeon">Dangeon Survival</a></li>
                        <li><a class="dropdown-item" href="swampchallenge">Swamp Challenge</a></li>
                        <li><a class="dropdown-item" href="flappy">Flappy Burnes</a></li>
                        <li><a class="dropdown-item" href="sd">Galactic Annihilation</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    
    
    <main>
        <?php
           if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }
        $page = $p[0] ?? "home";
            
        $pagina = "paginas/{$page}.php";
        
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>
    
    <footer class="rodape">
        <h2>
            <i class="fa-regular fa-copyright"></i>
            Desenvolvido Por André - 2024
        </h2>
    </footer>
</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bb77383723.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  
</html>