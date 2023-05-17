<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="sweetalert2.all.min.js"></script>

    <title>Faça algo diferente hoje!!!</title>
  </head>
  <body id="corpo">
    <div class="container md-8 center">
          <h1>Clique em um dos botões para sair da rotina hoje !!!</h1>
      <?php
          $roxo = array("Risoto", "Hambúrguer", "Lámen", "Tábua de frios", "Massa c/ gorgonzola", "Tomate confit", "Brie folhado", "Panqueca americana", "Arroz carreteiro", "Drinks especiais");
          $vermelho = array("Sushi", "Pizza", "Hambúrguer", "Comida árabe", "Cachorro quente", "Casa de drink", "Casa de carne", "Sorveteria", "Café da manhã", "Self service");
          $azul = array("Noite de filme","Spa day", "Responder uma TAG para se conhecer melhor", "Baixar um app de relacionamento", "Vídeo game", "Ligar para as amigas e fazer um jantar juntas", "Fit dance", "Noite de skincare", "Faxina no guarda-roupa", "Começar um livro novo");
          $verde = array("Ir no cinema", "Escolher um restaurante pelo prato que quer comer.", "Ir em uma cafeteria que nunca foi", "Sair com as amigas", "Assistir o nascer do sol", "Spa day", "Ir em um motel diferente", "Andar de bike", "Show", "Stand up", "Marcar um encontro");
      ?>
          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="button" class="btn btn-lg" id="roxo">Jantar em casa</button>
            <button type="button" class="btn btn-lg" id="vermelho">Jantar Fora</button>
            <button type="button" class="btn btn-lg" id="azul">Ficar em casa</button>
            <button type="button" class="btn btn-lg" id="verde">Sair pra passear</button>
          </div>

    </div>