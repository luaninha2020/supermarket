<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PADARIA</title>
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
<td> <a href="?modulo=padaria&acao=excluir&id=<?=$categoria["id"];?>"> EXCLUIR </a> </td>
</tr>







<?php } ?>
</table>
<br/>
<a href = "?modulo=padaria&acao=adicionar"> Adicionar </a>

 </body>

</html>
