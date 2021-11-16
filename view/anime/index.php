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
            <img src="img/logo-dark.png" alt="Logo dark" />
          </a>
        </div>
        <div class="navbar-nav">
          <div class="menu">
            <a href="">Inicio</a>
            <a href="">Animes</a>
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
    <section class="anime-information">
      <article class="anime-fact">
        <div class="facts">
          <div class="cover">
            <div class="thumb">
              <figure>
                <img src="img/portada.jpg" alt="Episode" />
              </figure>
              <div class="status-anime">
                <i class="fas fa-play-circle"></i>
                <span>FINALIZADO</span>
              </div>
            </div>
          </div>
          <div class="description">
            <h1>Housekishou Richard-shi no Nazo Kantei</h1>
            <div class="genres">
              <span class="btn-genre">
                <a href="" class="link-genre">Misterio</a>
              </span>
              <span class="btn-genre">
                <a href="" class="link-genre">Suspenso</a>
              </span>
            </div>
            <p class="overview">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Voluptatibus illum hic ipsum qui natus quo laboriosam, obcaecati,
              suscipit libero quis placeat assumenda voluptate odit rem velit
              illo nisi fuga sit.
            </p>
          </div>
        </div>
        <figure class="backdrop">
          <img src="img/backdrop.jpg" alt="backdrop" />
        </figure>
      </article>
    </section>
    <section class="list-cap">
      <div class="caps">
        <div class="info-episode">
          <i class="fas fa-info-circle"></i>
          <span
            >Somos olas del mismo mar, hojas del mismo árbol, flores del mismo
            jardín</span
          >
        </div>
      </div>
      <section class="all-caps">
        <div class="title-section">
          <div class="subtitle">
            <i class="fas fa-list"></i>
            <h3>Listado de episodios</h3>
          </div>
          <div class="max-min">
            <i class="fas fa-exchange-alt"></i>
            <h3>Mayor a menor</h3>
          </div>
        </div>
        <div class="list-episodes">
          <a href="" class="link-episode">
            <div class="episode-information">
              <figure>
                <img src="img/miniatura.jpg" alt="miniatura" />
              </figure>
              <div class="title-episode">
                <p>Vlad Love <span>Episodio 12</span></p>
                <span>Hace 5 horas</span>
              </div>
            </div>
            <i class="fas fa-play-circle"></i>
          </a>
          <a href="" class="link-episode">
            <div class="episode-information">
              <figure>
                <img src="img/miniatura.jpg" alt="miniatura" />
              </figure>
              <div class="title-episode">
                <p>Vlad Love <span>Episodio 12</span></p>
                <span>Hace 5 horas</span>
              </div>
            </div>
            <i class="fas fa-play-circle"></i>
          </a>
          <a href="" class="link-episode">
            <div class="episode-information">
              <figure>
                <img src="img/miniatura.jpg" alt="miniatura" />
              </figure>
              <div class="title-episode">
                <p>Vlad Love <span>Episodio 12</span></p>
                <span>Hace 5 horas</span>
              </div>
            </div>
            <i class="fas fa-play-circle"></i>
          </a>
          <a href="" class="link-episode">
            <div class="episode-information">
              <figure>
                <img src="img/miniatura.jpg" alt="miniatura" />
              </figure>
              <div class="title-episode">
                <p>Vlad Love <span>Episodio 12</span></p>
                <span>Hace 5 horas</span>
              </div>
            </div>
            <i class="fas fa-play-circle"></i>
          </a>
        </div>
      </section>
    </section>
    <footer>
      <nav class="nav-footer">
        <div class="navbar-footer-logo">
          <a href="">
            <img src="img/logo-ft.png" alt="Logo dark" />
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