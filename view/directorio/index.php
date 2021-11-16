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
    <section class="filters">
      <div class="title-section">
        <i class="fas fa-home"></i>
        <h1>Animes Recientes</h1>
      </div>
      <div class="filters-container">
        <aside class="filter">
          <form action="" method="get">
            <div class="filter-inputs">
              <div class="form-group">
                <label>TIPO</label>
                <select name="" id="">
                  <option value="">Seleccionar...</option>
                </select>
              </div>
              <div class="form-group">
                <label>GENERO</label>
                <select name="" id="">
                  <option value="">Seleccionar...</option>
                </select>
              </div>
              <div class="form-group">
                <label>AÑO</label>
                <select name="" id="">
                  <option value="">Seleccionar...</option>
                </select>
              </div>
              <div class="form-group">
                <label>ESTADO</label>
                <select name="" id="">
                  <option value="">Seleccionar...</option>
                </select>
              </div>
              <div>
                <button type="submit" class="submit-filter">Buscar</button>
              </div>
            </div>
          </form>
        </aside>
        <main class="filtered">
          <div class="animes">
            <div class="card-anime">
              <article class="anime">
                <a href="">
                  <div class="thumb">
                    <figure>
                      <img src="img/anime.jpg" alt="Episode" />
                    </figure>
                  </div>
                  <h3>Project Scard: Praeter no Kizu 11</h3>
                </a>
              </article>
            </div>
            <div class="card-anime">
              <article class="anime">
                <a href="">
                  <div class="thumb">
                    <figure>
                      <img src="img/anime.jpg" alt="Episode" />
                    </figure>
                  </div>
                  <h3>Project Scard: Praeter no Kizu 11</h3>
                </a>
              </article>
            </div>
            <div class="card-anime">
                <article class="anime">
                  <a href="">
                    <div class="thumb">
                      <figure>
                        <img src="img/anime.jpg" alt="Episode" />
                      </figure>
                    </div>
                    <h3>Project Scard: Praeter no Kizu 11</h3>
                  </a>
                </article>
              </div>
              <div class="card-anime">
                <article class="anime">
                  <a href="">
                    <div class="thumb">
                      <figure>
                        <img src="img/anime.jpg" alt="Episode" />
                      </figure>
                    </div>
                    <h3>Project Scard: Praeter no Kizu 11</h3>
                  </a>
                </article>
              </div>
              <div class="card-anime">
                <article class="anime">
                  <a href="">
                    <div class="thumb">
                      <figure>
                        <img src="img/anime.jpg" alt="Episode" />
                      </figure>
                    </div>
                    <h3>Project Scard: Praeter no Kizu 11</h3>
                  </a>
                </article>
              </div>
              <div class="card-anime">
                <article class="anime">
                  <a href="">
                    <div class="thumb">
                      <figure>
                        <img src="img/anime.jpg" alt="Episode" />
                      </figure>
                    </div>
                    <h3>Project Scard: Praeter no Kizu 11</h3>
                  </a>
                </article>
              </div>
              <div class="card-anime">
                <article class="anime">
                  <a href="">
                    <div class="thumb">
                      <figure>
                        <img src="img/anime.jpg" alt="Episode" />
                      </figure>
                    </div>
                    <h3>Project Scard: Praeter no Kizu 11</h3>
                  </a>
                </article>
              </div>
          </div>
          <div class="pagination">
            <div class="page-item">
              <a href="" class="page-link">
                <i class="fas fa-angle-double-left"></i>
              </a>
            </div>
            <div class="page-item">
              <a href="" class="page-link">
                1
              </a>
            </div>
            <div class="page-item">
              <a href="" class="page-link">
                2
              </a>
            </div>
            <div class="page-item">
              <a href="" class="page-link active">
                3
              </a>
            </div>
            <div class="page-item">
              <a href="" class="page-link">
                <i class="fas fa-angle-double-right"></i>
              </a>
            </div>
          </div>
        </main>
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
