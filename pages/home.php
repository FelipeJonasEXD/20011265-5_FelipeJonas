<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Meus Cookies</title>
</head>
<body>
    <section>
        <div class="circle"></div>
            <div class="content">
                <div class="textBox">
                    <h2>Surpreenda-se,<br>Conheça o verdadeiro<br><span class="cookieColor" id="cookieText"> Cookie.</span></h2>
                    <p>Diferente de tudo que existe no mercado, nossos cookies caseiros são produzidos com uma <strong>receita única</strong>,
                        com ingredientes selecionados e sem nenhuma economia. O recheio é <strong>recheio de verdade</strong>. <br><br> E o sabor? Ah, o sabor parece de mentira.
                    </p>
                    <a href="index.php?p=produto1" class="saibamais_bt1">Saiba Mais</a>
                    <a href="index.php?p=produto2" class="saibamais_bt2">Saiba Mais</a>
                    <a href="index.php?p=produto3" class="saibamais_bt3">Saiba Mais</a>
                    <a href="index.php?p=produto4" class="saibamais_bt4">Saiba Mais</a>
                </div>
                <div class="imgBox">
                    <img src="./images/cookie1_620px.png" class="cookie">
                </div>
            </div>
                <ul class="thumb">
                    <li><img src="./images/thumb1.png" class="tradicional" onclick="imgSlider('./images/cookie1_620px.png');changeCircleColor('#716001');changeButtonColor1('#716001');changeCookieColor('#716001');changeTextTradicional();mudaBotaoSabor()"></li>
                    <li><img src="./images/thumb2.png" class="chocolate" onclick="imgSlider('./images/cookie2_620px.png');changeCircleColor('#ac786d');changeButtonColor2('#ac786d');changeCookieColor('#ac786d');changeTextChocolate()"></li>
                    <li><img src="./images/thumb3.png" class="avela" onclick="imgSlider('./images/cookie3_620px.png');changeCircleColor('#b09d30');changeButtonColor3('#b09d30');changeCookieColor('#b09d30');changeTextAvela()"></li>
                    <li><img src="./images/thumb4.png" class="sortidos" onclick="imgSlider('./images/cookie4_620px.png');changeCircleColor('#e589c1');changeButtonColor4('#e589c1');changeCookieColor('#e589c1');changeTextSortidos()"></li>
                </ul>
    
    <script type="text/javascript">
        <?php include './js/script.js'; ?>
    </script>
</body>
</html>

<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>