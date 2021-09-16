
<header>
      <div class="conteiner-header w3-bar w3-mobile">
        <span class="w3-bar-item w3-mobile">
          <a href="index.php" class="fa fa-home w3-xlarge w3-btn barra" id="demo0">
            <p class="inline" id="demo0">MANGANIME</p>
          </a>
        </span>
        <span class="w3-right">
          <span class="w3-bar-item w3-mobile">
            <a href="news.php" class="w3-btn w3-mobile barra" >NOTICIAS</a>
            <a href="animes.php" class="w3-btn w3-mobile barra" >ANIME</a>
            <a href="mangas.php" class="w3-btn w3-mobile barra" >MANGA</a>
            <a href="foro.php" class="w3-btn w3-mobile barra" >FORO</a>
          </span>
          <span class="w3-bar-item w3-mobile">
            <form class="outsearch-header">
              <input
                class="search-header"
                type="search"
                placeholder="Buscar..."
              />
              <i class="fa fa-search" id="search"></i>
            </form>
          </span>
          <span class="w3-bar-item w3-mobile">
            <?php 
            if(isset($_SESSION['id'])) { ?>
              <a href='perfil.php' class='fa fa-user w3-xlarge w3-btn barra'>
              <p class='inline'><?php print_r($_SESSION['username'])?></p>
              </a>
            <?php } else { ?>
              <a href='login.php' class='fa fa-user w3-xlarge w3-btn barra'>
              <p class='inline'>Ingresar</p>
              </a>
            <?php 
          }
            ?>
          </span>
        </span>
      </div>
    </header>