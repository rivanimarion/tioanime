<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INICIO | Tioanime</title>
    <link rel="stylesheet" href="<?php constant('URL'); ?>public/css/style.css" />
    <script
      src="https://kit.fontawesome.com/05535acec9.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="navbar-logo">
          <a href="">
            <img src="<?php constant('URL'); ?>public/img/logo-dark.png" alt="Logo dark" />
          </a>
        </div>
        <div class="navbar-nav">
          <div class="menu">
            <a href="">Inicio</a>
            <a href="">Directorio</a>
          </div>
          <div class="search-user">
            <form action="" method="post" autocomplete="off">
              <div class="input-search">
                <input
                  type="text"
                  name="q"
                  id="buscador"
                  placeholder="Buscar..."
                />
              </div>
            </form>
            <div>
              <button class="log-button-color">
                <i class="fas fa-user"></i>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <section class="last-caps">
      <div class="title-section">
        <i class="fas fa-fire"></i>
        <h1>Últimos Episodios</h1>
      </div>
      <div class="episodes">
      <?php
					foreach ($this->animes as $row) {
						$item = new Anime();
						$item = $row;
					?>
        <div class="card-episode">
          <article class="episode">
            <a href="">
              <div class="thumb">
                <figure>
                  <img src="<?php echo $item->miniatura; ?>" alt="<?php echo $item->titulo; ?>" />
                </figure>
              </div>
              <h3><?php echo $item->titulo; ?></h3>
            </a>
          </article>
        </div>
        <?php } ?>
      </div>
    </section>
    <section class="last-anime">
      <div class="title-section">
        <i class="fas fa-fire"></i>
        <h1>Últimos Animes</h1>
      </div>
      <div class="animes">
      <?php
					foreach ($this->animes as $row) {
						$item = new Anime();
						$item = $row;
					?>
        <div class="card-anime">
          <article class="anime">
            <a href="">
              <div class="thumb">
                <figure>
                  <img src="<?php echo $item->portada; ?>" alt="<?php echo $item->titulo; ?>" />
                </figure>
              </div>
              <h3><?php echo $item->titulo; ?></h3>
            </a>
          </article>
        </div>
        <?php } ?>
      </div>
    </section>
    <footer>
      <nav class="nav-footer">
        <div class="navbar-footer-logo">
          <a href="">
            <img src="<?php constant('URL'); ?>public/img/logo-ft.png" alt="Logo dark" />
          </a>
        </div>
        <div class="contact">
          <div class="menu-footer">
            <a href="">Peticiones</a>
            <a href="">Contacto</a>
          </div>
          <div class="social">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </nav>
      <p>2019 tioanime.com</p>
    </footer>
  </body>
</html>
