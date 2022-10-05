<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste POST</title>
    <style>
        div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <label for="idmarca">Marca:</label>
            <input type="text" name="marca" id="idmarca" placeholder="Marca do carro">
        </div>
        <div>
            <label for="Preço" id="idpreco">Preço: </label>
            <input type="text" name="preco" id="idpreco" placeholder="Preço do carro" >
        </div>
        <div>
            <input type="checkbox"id="teto" name="opcionais[]" value="Teto solar"> 
            <label for="teto">Teto Solar</label>
        </div>
        <div>
            <input type="checkbox" id="pelicula" name="opcionais[]" value="Película">
            <label for="pelicula">Película</label>
        </div>
        <div>
            <input type="checkbox" id="blindado" name="opcionais[]" value="Blindado">
            <label for="blindado">Blindado</label>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>