<?php 
require_once('media.class.php');

class mediaGeometrica extends Media{
    protected float $nota1;
    protected float $nota2;
    protected string $aluno;

    function __construct (float $n1, float $n2, string $aluno) {
        parent::__construct ($n1, $n2, $aluno);
    }

    public function getMediaGeo():float {
        return sqrt($this->nota1 * $this->nota2);
    } 

    public function getMediaAri():float {
        return ($this->nota1 + $this->nota2)/2;
    }

    function __destruct () { 
        parent::__destruct();
        echo "<br>Programa MediaGeo Finalizado com Sucesso!"; 
    }

}