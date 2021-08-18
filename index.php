<?php include('./pages/header.php') ?>
    
    <?php
        $valor = @$_GET['p'];
        
        if ($valor == ''){ require_once './pages/home.php';}
        if ($valor == 'home'){ require_once './pages/home.php';}
        if ($valor == 'produto1'){ require_once './pages/produto1.php';}
        if ($valor == 'produto2'){ require_once './pages/produto2.php';}
        if ($valor == 'produto3'){ require_once './pages/produto3.php';}
        if ($valor == 'produto4'){ require_once './pages/produto4.php';}
        if ($valor == 'sobre'){ require_once './pages/sobre.php';}
        if ($valor == 'contato'){ require_once './pages/contato.php';}
    ?>

<?php include('./pages/footer.php') ?>