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
      <p class="h2">ANIMES</p>
      <div class="textsection">
        <p class="descripcion-anime">
          En 1917 se crearon en Japón, una serie de cortometrajes de animación
          influenciados en su origen por la estética de la factoría Disney. El
          primer cortometraje de animación japonesa tenía una duración de dos
          minutos y se llamaba Namakura Gatana, creado por Junichi Kouchi.
          <br />Sin embargo, estos cortometrajes aún no representaban, lo que
          hoy en día consideramos como estilo anime. Fué más tarde, a mediados
          del siglo XX, cuando surgió el anime como estilo con sello propio de
          la cultura japonesa. Era una forma de representar la adaptación en
          pantalla del estilo manga de contar historias. La palabra anime es
          simplemente una adaptación japonesa de la palabra «animación».
          <br /><br />Los animes más reconocidos a nivel mundial son Naruto,
          Dragon Ball, One Piece, Death Note, Pokemon, Slam Dunk entre otros.
        </p>
      </div>
      <div class="w3-conteiner w3-center conteiner-imgs">
        <div class="w3-row">
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/1.jpeg" />
          </div>
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/2.jpeg" />
          </div>
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/3.jpeg" />
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/4.jpeg" />
          </div>
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/5.jpeg" />
          </div>
          <div class="w3-third w3-padding">
            <img class="imganman" src="img/6.jpeg" />
          </div>
        </div>
      </div>
      <p class="h2">LISTADO DE ANIMES</p>
      <div class="w3-conteiner textsection">
        <dl>
          <dt>A</dt>
          <dd><a href=""> AIR GEAR</a></dd>
          <dd><a href=""> ATACK ON TITANS</a></dd>
          <dt>B</dt>
          <dd><a href=""> BURNING</a></dd>
          <dt>C</dt>
          <dd><a href=""> COLORFUL</a></dd>
          <dt>D</dt>
          <dd><a href=""> DRAGON BALL</a></dd>
          <dd><a href=""> DRAGON BALL Z</a></dd>
          <dd><a href=""> DRAGON BALL GT</a></dd>
          <dd><a href=""> DRAGON BALL SUPER</a></dd>
          <dt>E</dt>
          <dd><a href=""> EL CASO DE HANA & ELISE</a></dd>
          <dd><a href=""> EL EXTRAÑO </a></dd>
          <dd><a href=""> EL INTENDENTE SANSHO</a></dd>
          <dt>F</dt>
          <dd><a href=""> FAIRY TAIL</a></dd>
          <dd><a href=""> FREEDOM</a></dd>
          <dd><a href=""> FURI KURI</a></dd>
          <dt>G</dt>
          <dd><a href=""> GIBIATE</a></dd>
          <dd><a href=""> GOBLIN SLAYER</a></dd>
          <dd><a href=""> GUNDAM BUILD DIVERS Re:RISE 2</a></dd>
          <dt>H</dt>
          <dd><a href=""> HARMONY</a></dd>
          <dd><a href=""> HELLO WORLD</a></dd>
          <dt>I</dt>
          <dd><a href=""> ICE FANTASY</a></dd>
          <dt>J</dt>
          <dd><a href=""> JURASSIC</a></dd>
          <dd><a href=""> JOJO’s BIZARRE ADVENTURA</a></dd>
          <dt>K</dt>
          <dd><a href=""> KILL GIANTS</a></dd>
          <dd><a href=""> KING OF THORN</a></dd>
          <dd><a href=""> KUNG FU SION</a></dd>
          <dt>L</dt>
          <dd><a href=""> LEVIUS</a></dd>
          <dd><a href=""> LOVE CELL</a></dd>
          <dd><a href=""> LUCID DREAM </a></dd>
          <dt>M</dt>
          <dd><a href=""> MADAME ANTOINE</a></dd>
          <dd><a href=""> MAZINGER Z</a></dd>
          <dt>N</dt>
          <dd><a href=""> NARUTO</a></dd>
          <dd><a href=""> NEVER DIE</a></dd>
          <dd><a href=""> NOIR</a></dd>
          <dd><a href=""> NORAGAMI ARAGOTO</a></dd>
          <dt>O</dt>
          <dd><a href=""> OKJA</a></dd>
          <dd><a href=""> ONE PIECE</a></dd>
          <dd><a href=""> ONE PUNCH MAN</a></dd>
          <dt>P</dt>
          <dd><a href=""> PADAM PADAM</a></dd>
          <dd><a href=""> PERFECT BLUE</a></dd>
          <dt>Q</dt>
          <dd><a href=""> QUIERO SER SEIYU</a></dd>
          <dt>R</dt>
          <dd><a href=""> RANTARÓ, EL NINJA BOY</a></dd>
          <dd><a href=""> ReLIFE</a></dd>
          <dd><a href=""> ROUJIN Z</a></dd>
          <dd><a href=""> ROROUNI KENSHIN</a></dd>
          <dt>S</dt>
          <dd><a href=""> SAGRADA RESET</a></dd>
          <dd><a href=""> SAHIJATE NO PALADIN</a></dd>
          <dt>T</dt>
          <dd><a href=""> THE GREAT BATTLE</a></dd>
          <dd><a href=""> TOKYO GHOUL</a></dd>
          <dd><a href=""> TSUKIUTA: 12 CON RITMO</a></dd>
          <dt>U</dt>
          <dd><a href=""> USHOIO TO TORA</a></dd>
          <dd><a href=""> UTA NO PRINCE-SAMA MAJI LOVE 1000%</a></dd>
          <dt>V</dt>
          <dd><a href=""> VIAJE A AGARTHA</a></dd>
          <dt>W</dt>
          <dd><a href=""> WOLF’s RAIN</a></dd>
          <dd><a href=""> WOODPECKERS DETECTIVE’s OFFICE</a></dd>
          <dt>Y</dt>
          <dd><a href=""> YATERMAN</a></dd>
          <dd><a href=""> YES KA NO KA HANBUNKA</a></dd>
          <dd><a href=""> YOUR NAME</a></dd>
          <dd><a href=""> YUKI YUNA IS A HERO</a></dd>
          <dt>Z</dt>
          <dd><a href=""> ZATOICHI</a></dd>
          <dd><a href=""> ZOMBIELAND SAGA</a></dd>
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
      </div>
    </aside>
  </div>
  
  <?php include "footer.php"; ?>
</body>
</html>