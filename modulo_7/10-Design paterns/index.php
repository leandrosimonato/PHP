<?php

//Factory Design Pattern.
/*
	class Cachorro
	{
		
		public function __construct(){
			echo 'classe cachorro';
		}
	}


	class Gato
	{
		public function __construct(){
			echo 'classe gato';
		}
		
	}

	class Animal{

		public static function build($nomeClasse){
			if(class_exists($nomeClasse)){
				return new $nomeClasse;
			}else{
				die('Ops! A classe não existe!');
			}
		}

	}


	Animal::build('peixe');
*/

	//Facade Pattern


	///////
	//Adicionar/Fechar Carrinho - Carrinho
	//Calcular Frete - Frete
	//Fechar Pedido - Pedido

	class Carrinho{
		public function fecharCarrinho(){
			echo 'carrinho fechado';
		}
	}

	class Frete{
		public function calcularFrete(){

		}
	}

	class Pedido{
		public function fecharPedido(){

		}
	}

	class Loja{
			public function finalizarCompra(){
				$this->fecharCarrinho();
				$this->calcularFrete();
				$this->fecharPedido();
			}

			public function fecharCarrinho(){
				$carrinho = new Carrinho();
				$carrinho->fecharCarrinho();
			}

	}

	$loja = new Loja();
	$loja->finalizarCompra();



?>