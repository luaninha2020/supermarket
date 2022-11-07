<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FRIGORIFICO</title>
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
	<?php echo "<h1>Está é a sessão do Frigorífico</h1>";?>
</center>

<?php

// $cadastro = array(
// array("Categoria" => "Frigorifico", "Produto" => "Toscana de Frango Seara", "Valor" => "15,00", "Medida" => "Kg", "Estoque" => 50   ),
// array("Categoria" => "Frigorifico", "Produto" => "Charque", "Valor" => "30,00", "Medida" => "Kg", "Estoque" => 100   ),
// array("Categoria" => "Frigorifico", "Produto" => "Calabresa Seara", "Valor" => "20,00", "Medida" => "Kg", "Estoque" => 80   ),
// array("Categoria" => "Frigorifico", "Produto" => "Picanha Bovina", "Valor" => "40,00", "Medida" => "Kg", "Estoque" => 100   ),
// array("Categoria" => "Frigorifico", "Produto" => "Picanha Suina", "Valor" => "60,00", "Medida" => "Kg", "Estoque" => 50   )
// );

$sql = "select * from frigorifico";
$stmt = conexao()->prepare($sql);
$stmt->execute();

$frigorifico = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
foreach ($frigorifico as $categoria){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $categoria['categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $categoria['produto']; ?> </td>
<td ALIGN = "center"> <?php echo $categoria['valor'];?></td>
<td ALIGN = "center"> <?php echo $categoria['medida'];?></td>
<td ALIGN = "center"> <?php echo $categoria['estoque'];?></td>
<td> <a href="?modulo=frigorifico&acao=excluir&id=<?=$categoria["id"];?>"> EXCLUIR </a> </td>
</tr>







<?php } ?>
</table>
<br/>
<a href = "?modulo=frigorifico&acao=adicionar"> Adicionar </a>

</center>
 </body>

</html>