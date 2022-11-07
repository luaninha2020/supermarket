<html>

<head>

<title> Pagina PHP </title>
</head>
<body>




<header> Topo do Template </header>
<br/><a href="index.php"> Pagina Principal</a>
<br/><a href="?modulo=categorias&acao=lista"> categorias</a>
<br/><a href="?modulo=clientes&acao=lista"> clientes</a>
<br/><a href="?modulo=produtos&acao=lista"> produtos</a>
<br/><a href="?modulo=vendas&acao=lista"> vendas</a>
<br/><a href="?modulo=vendedores&acao=lista"> vendedores</a>

<?php 
if(isset($_GET['modulo'])){
	
$modulo = $_GET['modulo'];	
	
}else{
	
	$modulo = false;
}

if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
	
}else {
	
	$acao = false;
}

$url = "modulos/".$modulo."/".$acao.".php";

if($modulo&&$acao&&file_exists($url)){
	include($url);

}else {
echo "<br/>";

	echo "pagina solicitada nao existe";}


?>



<footer> Rodapé do Template </footer>

</body>
</html>