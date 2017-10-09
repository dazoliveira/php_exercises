<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Localização</title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>

    <nav>
        <header id="header">
            Localização
        </header>
    </nav>

    <article>
    <p>Digite a suas coordenadas (min. 20, máx. 20):</p>
        <div>
         <form action="Resultado.php" method="POST">
            <label for="x">X:</label>
             <input type="text" name="coordenadaX" id="x"><br/><br/>
             <label for="y">Y:</label>
             <input type="text" name="coordenadaY" id="y"><br/><br/>
             <input type="submit" name="" value="Enviar"><input type="reset" name=""    >
         </form>                    
        </div>        
    </article>

</body>
</html>