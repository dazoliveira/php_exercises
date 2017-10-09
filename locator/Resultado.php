
<?php

//verifiacr a distancia entre 0 e 38
require_once("lib/CalcDist.inc.php");
require_once("lib/Registros.inc.php");

$x = $_POST["coordenadaX"];
$y = $_POST["coordenadaY"];
$menor_dist = XMAX + YMAX;
$menor_idx = 0;
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Resultado</title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>

    <nav>
        <header id="header">
            Busca por carros mais perto da suas coordenadas:
        </header>
    </nav>

    <article>
    <p>Suas coordenadas:</p>
     
     <p>X: <?php echo $x ?></p>
     <p>Y: <?php echo $y ?></p>

<?php 
foreach ($registros as $idx => $item){

        $dist = distancia($x, $y, $item['posicao_x'], $item['posicao_y']);

        if($dist <= $menor_dist){
            $menor_dist = $dist;
            $menor_idx = $idx;
        }

      /*  echo '<p>' . $idx .' - ';
        echo $item['carro'].' ('.$item['carro_ano'].') ';
        echo '['. $item['posicao_x'].','.$item['posicao_y'].'] '.'</p>';*/

    }
?>
        <h3>Carro mais próximo encontrado:</h3>

        <?php 
            
            $coordX = $registros[$menor_idx]['posicao_x'];
            $coordY = $registros[$menor_idx]['posicao_y'];
            $nome = $registros[$menor_idx]['nome'];
            $carro = $registros[$menor_idx]['carro']; 
            $carro_ano = $registros[$menor_idx]['carro_ano']; 
            $carro_cor = $registros[$menor_idx]['carro_cor'];   
            $avaliacao = $registros[$menor_idx]['avaliacao'];
            $especial = $registros[$menor_idx]['especial']; 

            echo "<p>Id: $menor_idx</p>";
            echo "<p>Distância: $menor_dist</p>";
            echo "<p>Coordenadas: [$coordX, $coordY]</p>";


        ?>

        <br /><br />
     <a href="Localizacao.php">Voltar</a><a href="Detalhes.php?idx=<?php echo $menor_idx ?>">Detalhes </a>
    </article>

</body>
</html>

