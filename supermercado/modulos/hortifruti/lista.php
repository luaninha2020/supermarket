<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>HORTIFRUTI</title>
    </head>
    <body  style="background-color:powderblue;"> 

<center>
	<?php echo "<h1>Está é a sessão de Hortifruti</h1>";?>
</center>

<?php

$cadastro = array(
array("Categoria" => "Hortifruti", "Produto" => "Laranja", "Valor" => 6.50, "Medida" => "Kg", "Estoque" => 20   ),
array("Categoria" => "Hortifruti", "Produto" => "Abacate", "Valor" => 10.00, "Medida" => "Kg", "Estoque" => 30   ),
array("Categoria" => "Hortifruti", "Produto" => "Chicória", "Valor" => 6.00, "Medida" => "Maço", "Estoque" => 15   ),
array("Categoria" => "Hortifruti", "Produto" => "Melancia", "Valor" => 5.00, "Medida" => "Unidade", "Estoque" => 20   ),
array("Categoria" => "Hortifruti", "Produto" => "Salsinha", "Valor" => 4.00, "Medida" => "Maço", "Estoque" => 15   )
);
?>
<table border align = "center">
<tr>
<th> Categoria </th>
<th> Produto </th>
<th> Valor</th>
<th> Medida </th>
<th> Quantidade </th>
</tr>


<?php
foreach ($cadastro as $Categorias){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $Categorias['Categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $Categorias['Produto']; ?> </td>
<td ALIGN = "center"> <?php echo $Categorias['Valor'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Medida'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Estoque'];?></td>

</tr>







<?php } ?>
</table>
<br/>

<br/><a href  = "?modulo=hortifruti&acao=adicionar"> Adicionar</a>

 </body>

</html>