<?php
include_once "model/filtroStrategy/use/useGeneroTipoAnio.php";
class FiltroGeneroTipoAnio extends UseGeneroTipoAnio {
    public $series;

    public function filtrar_generoTipoAnio($data, $page, $limit)
    {
        // $filtrado = [];
        $items = [];
        // $genders = $data;

        // $consulta = "generos = '" . $genders[0] . "'";
        // for ($i = 1; $i < count($genders); $i++) {
        //     $consulta = $consulta . " OR generos = '" . $genders[$i] . "'";
        // }
        $statement = $this->connect()->query("SELECT * FROM animes 
        INNER JOIN generos_series 
        ON animes.id = generos_series.id_serie 
        WHERE anio = '$data[1]' AND TIPO = '$data[3]' AND generos_series.id_genero = '$data[0]' GROUP BY animes.id LIMIT $page, $limit");//LIMIT PARA LA PAGINACION

        while ($row = $statement->fetch()) {
            $item = new Anime();
            $item->id = $row['id'];
            $item->titulo = $row['titulo'];
            $item->portada = $row['portada'];
            $item->miniatura = $row['miniatura'];
            array_push($items, $item);
            // $i++;
        }
        // $filtrado = [$i, $items];

        return $items;

    }
}