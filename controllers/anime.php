<?php 
    class Anime extends Controller {
        function __construct() {
            parent::__construct();
            $this->view->usuario = '';
            $this->view->animeInfo = [];
        }

        function render() {
            $this->view->usuario = $this->session->getCurrentUser();

            $nombre = $_GET['nombre'];
            $this->view->animeInfo = $this->model->getAnime($nombre);


            $this->view->render('anime/index');
        }
    }

?>