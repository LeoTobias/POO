<?php

require_once("Imedia.int.php");
require_once("ImediaArit.int.php");

class MediaAri implements ImediaArit {
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
        echo "Nota Aritmética: " . $this->getMediaAri() . "<br>";
    }

    public function getMediaAri()
    {
        $media = 0;
        $i = 0;

        foreach($this->notas as $nota){
            $media += $nota;
            $i++;
        }
        return ($media / $i);
    }
}