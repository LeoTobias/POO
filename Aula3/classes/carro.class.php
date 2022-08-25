<?php

class Carro {
    private $marca;
    private $modelo;
    private $placa;
    private $anoFabr;

    // Métodos são as sub-rotinas dentro da classe
    public function setCarro($Marca, $Modelo, $Placa, $AnoFabr){
        $this->marca = $Marca;
        $this->modelo = $Modelo;
        $this->placa = $Placa;
        $this->anoFabr = $AnoFabr;
    }

    public function ligar(){
        echo "\nCarro Ligado!";
    }

    public function desligar(){
        echo "\nCarro Desligado!";
    }

    public function getMarca(){
        return $this->marca;
    }

}