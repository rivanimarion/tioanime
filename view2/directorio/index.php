<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tioanime</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php require_once "view/scripts.php"; ?>
</head>

<body>
	<?php require_once "view/navbar.php"; ?>
	<br><br>
	<div id="bg">
		<div class="container">
			<div class="directorio">
				<h1>Animes Recientes</h1>
				<br>
				<div class="recents">
					<aside class="filtro">
						<form class="form-filtro" action="<?php echo constant('URL'); ?>directorio/filtrar" method="GET" autocomplete="off">
							<label for="">TIPO</label>
							<select class="select-form" name="tipo" id="">
								<option value="DEFAULT">SELECCIONAR</option>
								<option value="SERIE">SERIE</option>
								<option value="OVA">OVA</option>
								<option value="PELICULA">PELICULA</option>
								<option value="ESPECIAL">ESPECIAL</option>
							</select>
							<br>
							<label for="">GENERO</label>
							<select class="select-form" name="genre" id="">
								<option value="DEFAULT">SELECCIONAR</option>
								<?php
								foreach ($this->generos as $row) {
									$item = new Generos();
									$item = $row;
								?>
									<option value="<?php echo $item->genero; ?>"><?php echo $item->genero; ?></option>
								<?php } ?>
							</select>
							<br>
							<label for="">AÑO</label>
							<select class="select-form" name="anio" id="">
								<option value="DEFAULT">SELECCIONAR</option>
								<?php
								for ($i = 0; $i <= 2020; $i++) {
									if ($i >= 1950) {
								?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php }
								} ?>
							</select>
							<br>
							<label for="">ESTADO</label>
							<select class="select-form" name="estado" id="">
								<option value="DEFAULT">SELECCIONAR</option>
								<option value="FINALIZADO">FINALIZADO</option>
								<option value="EN EMISION">EN EMISION</option>
							</select>
							<br>
							<input class="btn" type="submit" value="FILTRAR" />
						</form>
					</aside>
					<section class="articles">
						<?php
						foreach ($this->animesFiltrados as $row) {
							$item = new Anime();
							$item = $row;
						?>
							<article class="card">
								<div class="thumb">
									<a href=""><img src="<?php echo $item->portada; ?>"></a>
								</div>
								<div class="txtTitle">
									<?php echo $item->titulo; ?>
								</div>
							</article>
						<?php } ?>
					</section>
				</div>
				<div class="pagination">
					<?php
					if (isset($_GET['page'])) {
						if ($_GET['page'] > 1) {
							$n = strpos($this->URI, 'page=');
							$url = substr($this->URI, 0, $n) . 'page=' . ($_GET['page'] - 1);
					?>
							<a href="<?php echo $url; ?>"><i class="fas fa-arrow-left"></i></a>
						<?php
						}
					}
					if (isset($_GET['page'])) {
						$n = strpos($this->URI, 'page=');
						$url = substr($this->URI, 0, $n) . 'page=1';
						?>
						<a  href="<?php echo $url; ?>">1</a>
					<?php } else { ?>
						<a  href="<?php echo $this->URI; ?>&page=1">1</a>
					<?php } ?>
					<!-- /////////////////////////////////////////////////////////////////// -->
					<?php
					if ($this->paginas <= 3) {
						for ($i = 2; $i < $this->paginas; $i++) { ?>
							<?php
							if (isset($_GET['page'])) {
								$n = strpos($this->URI, 'page=');
								$url = substr($this->URI, 0, $n) . 'page=' . $i;
							?>
								<a  href="<?php echo $url; ?>"><?php echo $i; ?></a>
							<?php } else { ?>
								<a  href="<?php echo $this->URI; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
							<?php }
						}
					} else {
						if (isset($_GET['page'])) {
							if (($_GET['page'] + 3) < $this->paginas) {
								$n = strpos($this->URI, 'page=');
								$url1 = substr($this->URI, 0, $n) . 'page=' . ($_GET['page'] + 1);
								$url2 = substr($this->URI, 0, $n) . 'page=' . ($_GET['page'] + 2);
								$url3 = substr($this->URI, 0, $n) . 'page=' . ($_GET['page'] + 3);
							?>
								<p>...</p>
								<a  href="<?php echo $url1; ?>"><?php echo ($_GET['page'] + 1); ?></a>
								<a  href="<?php echo $url2; ?>"><?php echo ($_GET['page'] + 2); ?></a>
								<a  href="<?php echo $url3; ?>"><?php echo ($_GET['page'] + 3); ?></a>
								<p>...</p>
							<?php } else {
								$n = strpos($this->URI, 'page=');
								$url2 = substr($this->URI, 0, $n) . 'page=' . ($this->paginas - 2);
								$url3 = substr($this->URI, 0, $n) . 'page=' . ($this->paginas - 1);
							?>
								<p>...</p>
								<a  href="<?php echo $url2; ?>"><?php echo ($this->paginas - 2); ?></a>
								<a  href="<?php echo $url3; ?>"><?php echo ($this->paginas - 1); ?></a>
								<p>...</p>
							<?php }
						} else { ?>
							<p>...</p>
							<a  href="<?php echo $this->URI; ?>&page=2">2</a>
							<a  href="<?php echo $this->URI; ?>&page=3">3</a>
							<p>...</p>
					<?php }
					} ?>
					<!-- /////////////////////////////////////////////////////////////////// -->
					<?php
					if ($this->paginas >= 2) {
						if (isset($_GET['page'])) {
							$n = strpos($this->URI, 'page=');
							$url = substr($this->URI, 0, $n) . 'page=' . $this->paginas;
					?>
							<a  href="<?php echo $url; ?>"><?php echo $this->paginas; ?></a>
						<?php } else { ?>
							<a  href="<?php echo $this->URI; ?>&page=<?php echo $this->paginas; ?>"><?php echo $this->paginas; ?></a>
					<?php }
					} ?>
					<?php
					if (isset($_GET['page'])) {
						if (($_GET['page'] + 3) <= $this->paginas) {
							$n = strpos($this->URI, 'page=');
							$url = substr($this->URI, 0, $n) . 'page=' . ($_GET['page'] + 1);
					?>
							<a href="<?php echo $url; ?>"><i class="fas fa-arrow-right"></i></a>
					<?php }
					} ?>
				</div>
			</div>
		</div>
		<?php require_once "view/footer.php"; ?>
	</div>
	<?php require_once "view/script-body.php"; ?>
</body>

</html>