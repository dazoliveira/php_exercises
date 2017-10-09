
<?php

//verifiacr a distancia entre 0 e 38
require_once("lib/CalcDist.inc.php");
require_once("lib/Registros.inc.php");

$id = $_GET["idx"];

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Detalhes</title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>

    <nav>
        <header id="header">
            Detalhes do carro
        </header>
    </nav>

    <article>
   
        <?php 
            $x = $registros[$id]['posicao_x'];
            $y = $registros[$id]['posicao_y'];
            $nome = $registros[$id]['nome'];
            $carro = $registros[$id]['carro']; 
            $carro_ano = $registros[$id]['carro_ano']; 
            $carro_cor = $registros[$id]['carro_cor'];   
            $avaliacao = $registros[$id]['avaliacao'];
            $especial = $registros[$id]['especial']; 

        ?>

         <h2>Nome do motorista:</h2>
     
        <p><strong><?php echo $nome ?></strong></p>

        <h2>Foto:</h2>

        <figure><img src="img/foto/<?php echo $id ?>.png"></figure>

        <h2>Carro:</h2>

        <p><strong><?php echo $carro ?></strong></p>
        <p>cor: <?php echo $carro_cor ?></p>
        <p>ano: <?php echo $carro_ano ?></p>

        <h2>Avaliações: </h2>

        <?php 
        for ($i=0; $i < $avaliacao; $i++) { 
            echo "<img src='img/star.png'>";
        }

        for($i = $avaliacao; $i < 5; $i++)
            echo "<img src='img/star_.png'>";


        if ($especial == true)
            echo "<p>Carro <u>especial</u></p>";
            else 
                echo "<p>Carro comum</p>";

        ?>
            

         <br /><br />
     <a href="Localizacao.php">Voltar</a>
    </article>

</body>
</html>

