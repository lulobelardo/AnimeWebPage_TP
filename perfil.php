<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

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
    <div class="w3-col w3-quarter"><p></p></div>
    <section class="w3-col w3-half w3-panel w3-center">
      <?php echo "<p class='h2'>" . $_SESSION['username'] . "</p>" ?>
      
    <hr>
        <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Reiciendis in magnam quas vitae voluptas. Fugiat sint laudantium, alias cumque vero nostrum laboriosam nisi quam. Nobis voluptas exercitationem atque sapiente quibusdam? Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Accusantium veritatis similique doloribus iste adipisci corporis, aspernatur sint commodi ea asperiores impedit reprehenderit beatae tenetur blanditiis. Possimus excepturi commodi sequi odit. Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, quasi, quis! Expedita nobis qui quis. Repudiandae eveniet, fuga sint, magnam provident consectetur mollitia quia praesentium voluptatibus rem optio odit dolore? Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nobis doloremque magnam alias amet officiis, minima consectetur cupiditate ipsum incidunt magni non laborum minus, nam voluptate eum ullam aliquam exercitationem sit. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quos, voluptates error odio dolor beatae quod sequi. Inventore, consequuntur, aut illo rerum nostrum vel illum, consequatur, porro ipsum debitis minus deserunt. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Omnis, consequuntur perferendis excepturi qui quibusdam saepe expedita distinctio voluptatem ipsam ea quam magni molestiae amet quidem. Eos voluptatum ullam tempora, officia. Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Praesentium, consequuntur doloremque cupiditate alias quam animi natus earum placeat, eum accusamus beatae fugiat, nesciunt rerum odit voluptate, sit? Animi aliquid, natus?</p>
    <hr>
        <a href="logout.php">CERRAR SESIÓN</a>
        <br><p></p>
    </div>
    </section>
  </div>
  
  <?php include "footer.php"; ?>
</body>
</html>