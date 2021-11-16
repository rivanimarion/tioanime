<?php
class AnimeModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAnime($nombre)
    {
        $items = [];
        $statement = $this->db->connect()->query("SELECT * FROM animes WHERE titulo = '$nombre'");
        while ($row = $statement->fetch()) {
            $item = new Anime();
            $item->id = $row['id'];
            $item->titulo = $row['titulo'];
            $item->sinopsis = $row['sinopsis'];
            $item->portada = $row['portada'];
            $item->tipo = $row['TIPO'];
            $item->estado = $row['ESTADO'];
            $item->anio = $row['anio'];

            array_push($items, $item);
        }
        return $items;
    }
}
