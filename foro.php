<?php 

include "islogged.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
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
      <p class="h2">FORO</p>
      <div class="w3-center imgforo">
        <img class="imganman" src="img/uno.jpeg" />
      </div>
      <div
        class="
          w3-margin w3-center w3-row w3-padding
          coment-foro-sec
          w3-round-xlarge
        "
      >
        <p class="w3-left">Usuario</p>
        <p class="w3-right">Fecha de publicaión</p>
        <p class="w3-justify w3-row">
          Aca hay una version extendida y completa de los comentarios sobre
          este anime o manga...
        </p>
      </div>
      <div
        class="
          w3-margin w3-center w3-row w3-padding
          coment-foro-sec
          w3-round-xlarge
        "
      >
        <p class="w3-justify">COMENTARIOS</p>
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha de publicaión</p>
        </div>
        <p class="w3-justify">Opinion del usuario...</p>
        <hr />
        <div class="w3-row">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha de publicaión</p>
        </div>
        <p class="w3-justify">Opinion del usuario...</p>
      </div>
    </section>
    <div class="w3-col" style="width: 5%"><p></p></div>
    <aside class="w3-panel w3-quarter w3-center">
      <div class="contenedor-aside w3-margin">
        <p class="a1">Crear Discusión</p>
        <br />
        <div class="w3-row w3-padding coment-foro w3-round-xlarge">
          <p class="w3-left">Usuario</p>
          <p class="w3-right">Fecha</p>
          <br />
          <hr />
          
          <textarea class="w3-round-medium w3-padding" name="coment" rows="7" placeholder="Escribe tu comentario..." ></textarea>
          <!--Faltaria q suba una imagen acá tambien-->
        </div>
        <br />
        <div>
          <p class="a1">Otras Discusiones</p>
          <ul class="textsection">
            <l1>
              <a class="fro" href=""
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer suscipit.</a
              ></l1
            >
            <br /><br /><l1>
              <a class="fro" href=""
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer suscipit.</a
              ></l1
            >
            <br /><br /><l1>
              <a class="fro" href=""
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer suscipit.</a
              ></l1
            >
            <br /><br /><l1>
              <a class="fro" href=""
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer suscipit.</a
              ></l1
            >
            <br /><br /><l1>
              <a class="fro" href=""
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer suscipit.</a
              ></l1
            >
          </ul>
        </div>
      </div>
    </aside>
  </div>
  
  <?php include "footer.php"; ?>
</body>
</html>