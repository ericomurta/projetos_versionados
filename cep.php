<?php
class Cep {
    public $numero;


    function __construct($numero){
        $this->numero = $numero;
    }

    function local(){
        if($this->numero >= '01000001' && $this->numero <= '05999999' || 
        $this->numero >= '08000000' && $this->numero <= '08499999'){
            echo 'Cep de Sao Paulo';
        }elseif($this->numero >= '09000001' && $this->numero <= '09299999' ){
            echo 'cep de Santo Andre';
        }elseif($this->numero >= '09600001' && $this->numero <= '09899999'){
            echo 'Cep de Sao Bernardo do campo';
        }elseif($this->numero >= '09500001' && $this->numero <= '09599999'){
            echo 'Cep de Sao caetano do sul';
        }elseif($this->numero >= '07000001' && $this->numero <= '07399999'){
            echo 'Cep de Guarulhos';
        }elseif($this->numero >= '07400001' && $this->numero <= '07499999'){
            echo 'Cep de Aruja';
        }else{
            echo 'cep Invalido';
        }
    }
}

$obj1 = new Cep('aaaaaa');
$obj1->local();

/*

Sao Paulo- 01000001","05999999","08000000","08499999"
Santo André - "09000001","09299999"
São Bernardo do Campo - "09600001","09899999"
São Caetano do Sul - "09500001","09599999"
Guarulhos - "07000001","07399999"
Aruja - "07400001","07499999"
*/