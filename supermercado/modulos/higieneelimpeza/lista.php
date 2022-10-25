<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HIGIENE E LIMPEZA</title>
    </head>
    <body  style="background-color:powderblue;">

<center>
	<?php echo "<h1>Está é a sessão de Higiene e Limpeza</h1>";?>
</center>

<?php

$cadastro = array(
array("Categoria" => "Higiene e Limpeza", "Produto" => "Sabão em Pó ALA", "Valor" => "4,00", "Medida" => "Kg", "Estoque" => 50   ),
array("Categoria" => "Higiene e Limpeza", "Produto" => "Amaciante Down", "Valor" => "10,00", "Medida" => "Litro", "Estoque" => 100   ),
array("Categoria" => "Higiene e Limpeza", "Produto" => "Pasta de dente Colgate", "Valor" => "3,00", "Medida" => "Unidade", "Estoque" => 80   ),
array("Categoria" => "Higiene e Limpeza", "Produto" => "Detergente Ipê", "Valor" => "3,00", "Medida" => "Litro", "Estoque" => 100   ),
array("Categoria" => "Higiene e Limpeza", "Produto" => "Sabonete Nivea", "Valor" => "5,00", "Medida" => "Unidade", "Estoque" => 50   )
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
<br/><a href  = "?modulo=higieneelimpeza&acao=adicionar"> Adicionar</a>

 </body>

</html>