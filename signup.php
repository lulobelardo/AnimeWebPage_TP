<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, email, password)
          VALUES ('$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}

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
    <div class="w3-col w3-quarter"><p></p></div>
    <section class="w3-col w3-half w3-panel w3-center" >
      <p class="h2">REGISTRARSE</p>
      <div class="
      w3-margin w3-center w3-row w3-padding login-sec w3-round">
      <form action="" method="post">
      <div class="w3-margin">
      <label class="w3-row" for="username">Nombre de Usuario:</label>
      <input type="name" autocomplete="off" name="username" class="inputq" value="<?php echo $username; ?>" required>
      </div>
      <div class="w3-margin">
      <label class="w3-row" for="email">Direccion de correo electrónico:</label>
      <input type="email" autocomplete="off" name="email" class="inputq" placeholder="example@mail.com" value="<?php echo $email; ?>" required>
    </div>
    <div class="w3-margin">
      <label class="w3-row" for="password">Contraseña:</label>
      <input type="password" class="inputq" name="password" value="<?php echo $_POST['password']; ?>" required>
    </div>
    <div class="w3-margin">
      <label class="w3-row" for="passwordConfirm">Confirmar contraseña:</label>
      <input type="password" class="inputq" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
    </div>
      <!--<input class="w3-btn w3-mobile" name="submit" value="REGISTRARSE">--><button name="submit" class="w3-btn w3-mobile">Registrarse</button>
    </form>
    <hr>
    <div>
      <p class="inline" style="text-decoration: underline;">Si ya posees una cuenta</p>
      <a href="login.php"  class="w3-btn w3-mobile">INGRESAR </a>  
  
    </div>
    </div>
    </section>
  </div>

  <?php include "footer.php"; ?>
</body>
</html>