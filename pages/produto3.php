<?php require_once "./dados/array.php"; ?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style_produto3.css">
    <title>Cookie Tradicional</title>
</head>
<body>
    <section>  
            <div class="content">
                <div class="textBox">
                    <h2><?php echo $cookie['3']['nome'] ?><span class="cookieColor" id="cookieText">.</span></h2>
                    <p>     
                        <?php echo $cookie['3']['descricao'] ?>
                        <br>
                        <a> R$ <?php echo $cookie['3']['preco'] ?> </a>
                    </p>
                </div>
                <div class="imgBox">
                    <img src="./images/cookie3_620px.png" class="cookie">
                </div>
            </div>
        </div>
    </script>
</body>
</html>


<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>