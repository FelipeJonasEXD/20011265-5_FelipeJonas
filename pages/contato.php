<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style_contato.css">
    <title>Contato</title>
</head>
<body>
<div class="divBox">
<!-- <img src="./images/call.png" class="forma"></img>  -->
<iframe class="forma" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14642.125489416014!2d-51.9168663!3d-23.4412899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e3ee356ad1bd6c3!2sUniCesumar%20-%20Maring%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1628614008357!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <form id="contact" action="" method="post">
    <h3>Fale Conosco</h3>
    <h4>Envie-nos uma mensagem abaixo</h4>
    <fieldset>
      <input placeholder="Seu nome completo" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Seu endereço de e-mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Seu número de telefone (opcional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Seu website (opcional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Digite sua mensagem aqui..." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Submit</button>
    </fieldset>
  </form>
</div>
    
</body>
</html>