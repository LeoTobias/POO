<?php
abstract class Figura 
{
    protected $m_lados;

    protected $tipo;

    public function setLados ( $lados ) 
    {
            $i =-1;
            foreach ( $lados as &$valor ) 
            {  
                $i++;
                $this->m_lados [ $i  ] = $valor;
            }
    }
    
    public function getArea ( Figura $object )
    {
           return 0;
    }

}

class Retangulo extends Figura 
{
    public function setLados ( $lados ) 
    {
            $i =-1;
            foreach ( $lados as &$valor ) 
            {  
                $i++;
                $this->m_lados [ $i  ] = $valor;
            }
    }

    public function getAreaR ( Figura $object )
    {
        return ( $object->m_lados[0] * $object->m_lados[1] );
    }

}

class Quadrado extends Figura 
{
    public function setLados (  $lados  ) 
    {
        $this->m_lados[0] = $lados[0];
    }

    public function getAreaR ( Figura $object  )
    {
        return pow( $object->m_lados[0], 2) ;
    }

}

$r1 = new Retangulo;

$ld = array (10, 5);

$r1->setLados ( $ld );
echo $r1->getAreaR(  $r1 ); 

echo "<br>";

$q1 = new Quadrado;

$ld = array (10);

$q1->setLados ( $ld );
echo $q1->getAreaR(  $q1 ); 

var_dump($r1);