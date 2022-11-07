			<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ADEGA</title>

    </head>
    <body  style="background-color:powderblue;"> 

<center>
	<?php echo "<h1>Está é a sessão da Adega</h1>"; ?>
</center>


<?php

//  $cadastro = array(
// // array("Categoria" => "Adega", "Produto" => "Energético Red Bull", "Valor" => "14,00", "Medida" => "Litro", "Estoque" => 50   ),
// // array("Categoria" => "Adega", "Produto" => "Cerveja Corona", "Valor" => "12,00", "Medida" => "330ml", "Estoque" => 100   ),
// // array("Categoria" => "Adega", "Produto" => "Whisky Black Stone", "Valor" => "60,00", "Medida" => "Litro", "Estoque" => 80   ),
// // array("Categoria" => "Adega", "Produto" => "Cerveja Eisenbahn", "Valor" => "10,00", "Medida" => "330ml", "Estoque" => 100   ),
// // array("Categoria" => "Adega", "Produto" => "Energético Vulcano", "Valor" => "14,00", "Medida" => "Litro", "Estoque" => 50   )
//  );
// ?>  

<?php
$sql = "select * from adega";
$stmt = conexao()->prepare($sql);
$stmt->execute();

$adega = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<table border align = "center">
  

<tr>
<th scope="col"> Categoria </th>
<th scope="col"> Produto </th>
<th scope="col"> Valor</th>
<th scope="col"> Medida </th>
<th scope="col"> Quantidade </th>
</tr>
</thead>

<?php
 foreach ($adega as $categoria){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $categoria['categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $categoria['produto']; ?> </td>
<td ALIGN = "center"> <?php echo $categoria['valor'];?></td>
<td ALIGN = "center"> <?php echo $categoria['medida'];?></td>
<td ALIGN = "center"> <?php echo $categoria['quantidade'];?></td>
<td> <a href="?modulo=adega&acao=excluir&id=<?=$categoria["id"];?>"> EXCLUIR </a> </td>
</tr>







<?php } ?>
</table>
<br/>
<a href = "?modulo=adega&acao=adicionar"> Adicionar </a>

 </body>

</html>