<?php
abstract class Figura {

    public $lados;

    public function setLados ( array $vlados ) { 
        $i =-1;
        foreach ( $vlados as $ld )
        {
            $i++;
            $this->lados[$i] = $ld;
        } 
    }

    abstract public function getArea (); 
}

class Retangulo extends Figura {
    public function getArea ()
    {
        return ($this->lados[0] * $this->lados[1]) ;
    }  
}
class Quadrado extends Figura {
    
    public function getArea ()
    {
        return ( pow($this->lados[0],2));
    } 

}

$r1 = new Retangulo();
$ldsr1 = array(4,8); // configura area do retangulo = 32
$r1->setLados($ldsr1);
echo "<br>Área do Retângulo =" . $r1->getArea ();
$q1 = new Quadrado();
$ldsq1 = array(4); // configura área para quadrado = 16
$q1->setLados($ldsq1);
echo "<br>Área do Quadrado =" . $q1->getArea ();