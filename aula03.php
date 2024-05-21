<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de Números</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input, button {
            margin: 10px;
            padding: 8px;
        }
        </style>
</head>
<body>


      <h1>Comparação de Números</h1>


      <!-- Formulário para inserir dois números-->
      <form action="" method="post">
        <label for="numero1">Digite o Primeiro Número:</label>
        <input type="number" name="numero1" required>


        <label for="numero2">Digite o Segundo Número:</label>
        <input type="number" name="numero2" required>


        <button type="submit">Comparar</button>
    </form>


    <?php
       //Verifica se o dormulário foi enviado
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //Obtém os valores do formulário
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];


        //Compara os números e exibe o maior
        if ($numero1 > $numero2) {
            echo "<p>O maior número é: $numero1</p>";
        } elseif ($numero2 > $numero1) {
            echo "<p>O maior número é: $numero2</p>";
        } else {
            echo "<p>Os números são iguais.</p>";
        }
       }    
    ?>
   
</body>
</html>
