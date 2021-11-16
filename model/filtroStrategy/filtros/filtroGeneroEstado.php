<?php
include_once "model/filtroStrategy/use/useGeneroEstado.php";
include_once "model/anime.php";
class FiltroGeneroEstado extends UseGeneroEstado {
    public $series;

    public function filtrar_generoEstado($data, $page, $limit)
    {
        // $filtrado = [];
        $items = [];
        // $genders = $data;

        // $consulta = "generos = '" . $genders[0] . "'";
        // for ($i = 1; $i < count($genders); $i++) {
        //     $consulta = $consulta . " OR generos = '" . $genders[$i] . "'";
        // }
        $statement = $this->connect()->query("SELECT * FROM animes 
        INNER JOIN generos_series ON animes.id = generos_series.id_serie
        WHERE TIPO = '$data[3]' AND id_genero = '$data[0]' LIMIT $page, $limit");//LIMIT PARA LA PAGINACION
        $statement->execute(array());
        while ($row = $statement->fetch()) {
            $item = new Anime();
            $item->id = $row['id'];
            $item->titulo = $row['titulo'];
            $item->sinopsis = $row['sinopsis'];
            $item->portada = $row['portada'];
            $item->miniatura = $row['miniatura'];
            array_push($items, $item);
            // $i++;
        }
        // $filtrado = [$i, $items];

        return $items;

    }
}