<html>
    <head>
        <title>FRIGORIFICO</title>
    </head>
    <body  style="background-color:powderblue;">

<center>
	<?php echo "<h1>Está é a sessão do Frigorífico</h1>";?>
</center>

<?php

$cadastro = array(
array("Categoria" => "Frigorifico", "Produto" => "Toscana de Frango Seara", "Valor" => "15,00", "Medida" => "Kg", "Estoque" => 50   ),
array("Categoria" => "Frigorifico", "Produto" => "Charque", "Valor" => "30,00", "Medida" => "Kg", "Estoque" => 100   ),
array("Categoria" => "Frigorifico", "Produto" => "Calabresa Seara", "Valor" => "20,00", "Medida" => "Kg", "Estoque" => 80   ),
array("Categoria" => "Frigorifico", "Produto" => "Picanha Bovina", "Valor" => "40,00", "Medida" => "Kg", "Estoque" => 100   ),
array("Categoria" => "Frigorifico", "Produto" => "Picanha Suina", "Valor" => "60,00", "Medida" => "Kg", "Estoque" => 50   )
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


<br/><a href  = "?modulo=frigorifico&acao=adicionar"> Adicionar</a>

</center>
 </body>

</html>