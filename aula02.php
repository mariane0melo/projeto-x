<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do aluno</title>
    <style>
        body{
            font-family: arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input, select, button{
            margin: 10px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Dados do aluno</h1>
    <! -- formalário para inserir dados do aluno -- >
    <form action="" method="post">
        <label for="nome"> nome do aluno:</label>
        <input type="text" name="nome" required>
        <label for="ano">Ano:</label>
        <input type="text" name="ano" required>

        <label for="serie">Série:</label>
        <select name="serie" required>
            <option value="1">1º Série</option>
            <option value="2">2º Série</option>
            <option value="3">3º Série</option>
    </select>

    <label for="numero">Digite um Número:</label>
    <input type="number" name="numero" required>

    <button type="submit">Enviar</button>
    </form>

    <?php
    //verifica se o formulario foi enviado
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        //OBTEM VALORES DO FORM
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $serie = $_POST["serie"];
        $numero = $_POST["numero"];

        //Exibe os dados na telas
        echo "<p>Nome do Aluno: $nome</p>";
        echo "<p>Ano: $ano</p>";
        echo "<p>serie: $serie !º Série</p>";
        echo "<p>Numero Digitado: $numero</p>";
    }
    ?>
</body>
</html>