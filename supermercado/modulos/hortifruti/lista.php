<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SUPERMERCADO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="custom/loja.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/css.css" rel="stylesheet" />
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
<td> <a href="?modulo=hortifruti&acao=excluir&id=<?=$categoria["id"];?>"> EXCLUIR </a> </td>
</tr>







<?php } ?>
</table>
<br/>
<a href = "?modulo=hortifruti&acao=adicionar"> Adicionar </a>

 </body>

</html>