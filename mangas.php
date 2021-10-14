<?php 

include "islogged.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <link rel="stylesheet" href="styles/slider.css" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- ??? -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Font Days One -->
    <link
      href="https://fonts.googleapis.com/css2?family=Days+One&display=swap"
      rel="stylesheet"
    />
    <title>Manganime</title>
    <style>
      .fondo {
        background-image: url("img/BackGround.png");
        background-color: #0e0e5a;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
      }
    </style>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
</head>
<body class="fondo">
  <!-- Header, se mantiene-->
  <?php include "header.php"; ?>

  <div class="medio">
    <div class="w3-col" style="width: 10%"><p></p></div>
    <section class="w3-panel w3-half w3-center">
      <p class="h2">MANGAS</p>
      <div class="textsection">
        <p>
          El manga comienza su vida entre los años 1790-1912 debido a la
          llegada de personas de Occidente a Japón, y este estilo de dibujo
          fue tomando pronto mayor popularidad entre los japoneses.
          <br />El manga nace de la combinación de dos tradiciones: la del
          arte gráfico japonés, producto de una larga evolución a partir del
          siglo XI, y la de la historieta occidental, afianzada en el siglo
          XIX. Sólo cristalizaría con los rasgos que hoy conocemos tras la
          Segunda Guerra Mundial y la labor pionera de Osamu Tezuka. <br />Los
          mangas más reconocidos a nivel mundial son Golgo 13, KochiKame,
          Black Jack y Detective Conan
        </p>
      </div>
      <div class="w3-conteiner w3-row w3-center conteiner-imgs">
        <div class="w3-quarter w3-padding">
          <img class="imganman" src="img/1m.jpeg" />
        </div>
        <div class="w3-quarter w3-padding">
          <img class="imganman" src="img/2m.jpeg" />
        </div>
        <div class="w3-quarter w3-padding">
          <img class="imganman" src="img/3m.jpeg" />
        </div>
        <div class="w3-quarter w3-padding">
          <img class="imganman" src="img/4m.jpeg" />
        </div>
      </div>
      <p class="h2">LISTADO DE MANGAS</p>
      <div class="textsection">
        <dl>
          <?php 
            include "search.php";
          ?>
        </dl>
      </div>
    </section>
    <div class="w3-col" style="width: 5%"><p></p></div>
    <aside class="w3-panel w3-quarter w3-center">
      <div class="contenedor-aside w3-margin">
        <p class="a1">COMENTARIOS DE LA COMUNIDAD</p>
        <img class="asideimg" src="img/uno.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/dos.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/tres.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/uno.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/dos.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/tres.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/uno.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/dos.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/tres.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/uno.jpeg" />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
        </div>
        <p class="op w3-row">Opinión y comentario sobre el manga</p>
        <img class="asideimg" src="img/dos.jpeg" />
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha</p>
        <p class="op">Opinión y comentario sobre el manga</p>
      </div>
    </aside>
  </div>
  
  <?php include "footer.php"; ?>
</body>
</html>