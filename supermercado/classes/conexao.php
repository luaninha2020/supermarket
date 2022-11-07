<?php 
function conexao (){
	

	$servidor = "localhost";
	$usuario = "root";
	$senha  = "";
	$nome_banco = "crud_php";
	
	
	$conexao = null;

	
	
	
	try{
		$conexao = new PDO(
		"mysql:host=$servidor;dbname=$nome_banco",$usuario,$senha);
					
	}catch(PDOException $e){
		
		echo "Erro de conexão".$e -> getMessage();
     
		
	}
	
	
	return $conexao;
	
}
conexao();


?>