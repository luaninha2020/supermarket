<html>
    <head>
        <title>ADEGA</title>

    </head>
    <body  style="background-color:powderblue;"> 

<center>
	<?php echo "<h1>Está é a sessão da Adega</h1>"; ?>
</center>



<?php

$cadastro = array(
array("Categoria" => "Adega", "Produto" => "Energético Red Bull", "Valor" => "14,00", "Medida" => "Litro", "Estoque" => 50   ),
array("Categoria" => "Adega", "Produto" => "Cerveja Corona", "Valor" => "12,00", "Medida" => "330ml", "Estoque" => 100   ),
array("Categoria" => "Adega", "Produto" => "Whisky Black Stone", "Valor" => "60,00", "Medida" => "Litro", "Estoque" => 80   ),
array("Categoria" => "Adega", "Produto" => "Cerveja Eisenbahn", "Valor" => "10,00", "Medida" => "330ml", "Estoque" => 100   ),
array("Categoria" => "Adega", "Produto" => "Energético Vulcano", "Valor" => "14,00", "Medida" => "Litro", "Estoque" => 50   )
);
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

<br/><a href  = "?modulo=adega&acao=adicionar"> Adicionar</a>

 </body>

</html>