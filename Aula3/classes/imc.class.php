<?php

class IMC {

    private $peso;
    private $altura;

    public function calculoIMC($p, $a){
            $this->peso = $p;
            $this->altura = $a;

            $imc = $this->peso / ( $this->altura * $this->altura );
            $imc = substr($imc, 4, 3);
            $imc = substr_replace($imc, '.', 2, 0);

            return $imc;
    }

    public function statusIMC($imc){
        if($imc < 18.5) {
            return ['Magreza','triste.png','feliz.png'];
        }
        else if($imc >= 18.5 && $imc <= 24.9) {
            return ["Normal",'feliz.png','feliz.png'];
        }
    
        else if($imc >= 25 && $imc <= 29.9) {
            return ["Sobrepeso",'triste.png','triste.png'];
        }
    
        else if($imc >= 30 && $imc <= 34.9) {
            return ["Obesidade grau I",'triste.png','triste.png'];
        }
    
        else if($imc >= 35 && $imc <= 39.9) {
            return ["Obesidade grau II",'triste.png','triste.png'];
        }
    
        else if($imc >= 40) {
            return ["Obesidade grau III",'triste.png','triste.png'];
        }
    
      }

}