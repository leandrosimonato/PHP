<?php


class minhaClasse
{
   const VALOR = 300;
   public function__construct(){
   		echo self::VALOR; //não posso trocar o valor em orientação em objetos!
   }

}

echo minhaClasse::VALOR;

?>