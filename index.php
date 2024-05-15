<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <header class="header">
       <a href="home" class="header-logo"> 
        <img src="#" alt="#" title="logo" class="logo-img">
       </a>

       <a href="javascript: mostrarMenu()" title="menu" class="header-menu">
        <i class="fa-solid fa-bars"></i>
       </a>
       
       <ul class="opn">
         <li>
            <a href="#" title="Deixe sua opinião">
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
            </ul>
       </nav>
    </header>

    <div class="fundo">
        <img src="imagens/fundo.jpg" alt="imagem fundo" class="img-fundo-moba" title="imagem fundo">
    </div>

    <main>
        <?php
            if (isset($_GET["param"])) {
                $param = $_GET["param"];
                $p = explode("/" , $param);
            }
            $page = $p[0] ?? "home";
            $jogo = $p[1] ?? NULL;

            if ($page == "jogo") {
                $pagina = "jogo/{$jogo}.php";
            } else {
                $pagina = "paginas/{$page}.php";
            }

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }
        ?>
    </main>

    <footer class="footer">
        <h2>
            <i class="fa-regular fa-copyright"></i>
            Desenvolvido Por - André - 2024 
        </h2>
    </footer>
</body>

<script src="https://kit.fontawesome.com/bb77383723.js" crossorigin="anonymous"></script>

</html>