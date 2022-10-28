<?php

interface InterfaceCalcVenda {
    public function CalcTotalVend();
}

class vendas implements InterfaceCalcVenda {
    public function remuneracao(){
        echo "<br> Total";
    }
}

class PesFisica implements InterfaceCalcVenda {
    public function remuneracao() {
        echo "<br> Vendas";
    }
}

class Empresa {
    protected $nome;
    protected $vendaTotal;
    protected $vendaData;

    public function CalcTotalVend(InterfaceCalcVenda $nome, $vendaData, $vendaTotal) {
        $this->nome = $nome->CalcTotalVend();
        $this->TotalVenda = $vendaTotal->CalcTotalVend();
        $this->DataVend = $vendaData->CalcTotalVend();
    }
}