<html>
    <head>
        <title>PADARIA</title>
    </head>
    <body  style="background-color:powderblue;">

<center>
	<?php echo "<h1>Está é a sessão de Padaria</h1>";?>
</center>

<?php 

$cadastro = array(
array("Categoria" => "Padaria", "Produto" => "Pão Francês", "Valor" => 0.75, "Popularidade" => 5, "Quantidade" => 30   ),
array("Categoria" => "Padaria", "Produto" => "Pão de Hamburguer", "Valor" => 0.75, "Popularidade" => 3, "Quantidade" => 30   ),
array("Categoria" => "Padaria", "Produto" => "Bolo de Laranja", "Valor" => 15.00, "Popularidade" => 5, "Quantidade" => 6   ),
array("Categoria" => "Padaria", "Produto" => "Pastel", "Valor" => 3.75, "Popularidade" => 4, "Quantidade" => 10   ),
array("Categoria" => "Padaria", "Produto" => "Risole", "Valor" => 4.00, "Popularidade" => 4, "Quantidade" => 10   )
);
?>
<table border align = "center">
<tr>
<th> Categoria </th>
<th> Produto </th>
<th> Valor</th>
<th> Popularidade </th>
<th> Quantidade </th>
</tr>


<?php
foreach ($cadastro as $Categorias){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $Categorias['Categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $Categorias['Produto']; ?> </td>
<td ALIGN = "center"> <?php echo $Categorias['Valor'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Popularidade'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Quantidade'];?></td>

</tr>







<?php } ?>
</table>
<br/>

<br/><a href  = "?modulo=padaria&acao=adicionar"> Adicionar</a>

 </body>

</html>
