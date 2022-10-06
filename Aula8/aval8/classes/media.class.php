<?php 

abstract class Media {
    protected float $nota1;
    protected float $nota2;
    protected string $aluno;

    function __construct(float $n1, float $n2, string $al){
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->aluno = $al;
    }

    abstract public function getMediaGeo():float ;
    abstract public function getMediaAri():float ;
    
    public function mostrar():void{}

    public function __destruct() {}
}