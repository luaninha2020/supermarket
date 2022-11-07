<html>

<head>


</head>
<body>
<h1 align="center"> Adicionar produto </h1>
<form align="center" method="POST" action="">
Categoria: <input type="text" name="categoria"> <br/><br/>
Produto:   <input type="text" name="produto"> <br/><br/>
Valor:         <input type="text" name="valor"> <br/><br/>
Popularidade:      <input type="text" name="popularidade"> <br/><br/>
Quantidade: <input type="text" name="quantidade"> <br/><br/>
<input type="submit" name="button" value="SALVAR">
 

</form>



</table>

<?php 
include ('classes/conexao.php');
if(isset($_POST["button"])&&$_POST["button"]="SALVAR"){
 

 $categoria = $_POST['categoria'];
 $produto = $_POST['produto'];
 $valor = $_POST['valor'];
 $popularidade  = $_POST['popularidade'];
 $quantidade = $_POST['quantidade'];
 
 $sql = "INSERT INTO padaria (categoria, produto, valor, medida, quantidade) VALUES(?,?,?,?,?)";
 $stmt = conexao()->prepare($sql);
 $stmt->bindParam(1, $categoria);
 $stmt->bindParam(2, $produto);
 $stmt->bindParam(3, $valor);
 $stmt->bindParam(4, $popularidade);
 $stmt->bindParam(5, $quantidade);
 $stmt->execute();
 echo "Salvo com sucesso";
}



?>




</body>
</html>