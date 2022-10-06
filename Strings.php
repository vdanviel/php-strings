<?php

class letters{

    private $phrase;

    public function setphrase($string){
        $this->phrase = $string;
    }

    public function getphrase(){
        return $this->phrase;
    }

    public function toarray($string){
        $array = explode(" ", $string);
        return $array;
    }

    public function tostring($string){
        $array = implode(" ", $string);
        return $array;
    }

    public function transformcase($string,$case="upper"){
        if ($case == "upper") {
            return strtoupper($string);
        }elseif($case == "lower"){
            return strtolower($string);
        }elseif($case == "tittle") {
            return ucwords($string);
        }else{
            return "Error";
        }
    }

}