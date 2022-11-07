<html>
    <head>
        <title>Pagina PHP</title>
    </head>
    <body>
        <header> Topo do template </header>
    <nav>
        <a href="?modulo=adega&acao=lista">Adega</a> </br>
        <a href="?modulo=padaria&acao=lista">Padaria</a> </br>
        <a href="?modulo=hortifruti&acao=lista">HortiFruti</a> </br>
        <a href="?modulo=higieneelimpeza&acao=lista">Higiene e Limpeza</a> </br>
        <a href="?modulo=frigorifico&acao=lista">Frigorifico</a>  </br>

    <?php 
    
        include('classes/conexao.php');

    if(isset($_GET["modulo"])){ $modulo = $_GET["modulo"];} else {$modulo=false;}
    if(isset($_GET["acao"])){ $acao=$_GET["acao"];} else { $acao=false;}

    $url = "modulos/".$modulo."/".$acao.".php";
    
    if($modulo && $acao && file_exists($url)){
        include($url);
    } else{
        echo "Página solicitada não encontrada";
    }
    ?> 



    <footer> Rodape do template </footer>
</body>
</html>