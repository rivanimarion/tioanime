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
    <section class="login">
        <div class="box-login">
            <div class="header-log">
                <div class="title-log">
                    <i class="fas fa-user"></i>
                    <h5>Iniciar sesion</h5>
                </div>
                <span><i class="fas fa-times"></i></span>
            </div>
            <div class="divider"></div>
            <form action="" method="post" autocomplete="off">
                <div class="input-log">
                    <label for="">Correo Electronico</label>
                    <input type="text" name="mail" id="">
                </div>
                <div class="input-log" style="margin-bottom: 1.5rem">
                    <label for="">Contraseña</label>
                    <input type="text" name="mail" id="">
                </div>
                <div class="mb-btn-log">
                    <button class="btn-log">
                        Iniciar sesion
                    </button>
                </div>
                <div class="login-text">
                    ¿No tienes una cuenta?
                    <a style="color: #37d1a2;text-decoration: none;" href="#">Registrate</a>
                </div>
            </form>
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
