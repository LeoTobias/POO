<?php

class Media {
    public $ados;
    public $avf;
    public $aluno;

    function __construct($n1, $n2, $al){
        $this->ados = $n1;
        $this->avf = $n2;
        $this->aluno = $al;
    }

    function medioGeo(){
        return sqrt($this->ados * $this->avf); // É um void por que tem retorno
    }

    function mostrar(){
        echo $this->aluno . "<br>"; // É um void pois não tem retorno
    }

    function __destruct(){
        echo "<br>Programa média finalizado!";
    }
}