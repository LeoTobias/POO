<?php

require_once("Imedia.int.php");
require_once("ImediaGeo.int.php");

class MediaGeometrica implements ImediaGeo {
    public $notas;
    public $nome;

    public function setDados(array $notas, $nome)
    {
        $i = 0;
        foreach( $notas as $nota) {
            $this->notas[$i] = $nota;
            $i++;
        }
    }

    public function mostrarMedia($obj)
    {
        echo "Nota Geométrica: " . $this->getMediaGeo() . "<br>";
    }

    public function getMediaGeo()
    {
        $media = 1;
        $i = 0;

        foreach($this->notas as $nota){
            $media = $media * $nota;
            $i++;
        }
        return pow($media, $i);
    }
}