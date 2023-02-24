<html>
    <head>
        <title>Cadastro do funcionario</title>
    </head>
    <body>
    <?php
    echo "Digite suas informações abaixo";
    ?>
    <form action="recebe.php" method="post">
    Nome:<input type ="text" name="caixa1"><br>
    CPF:<input type ="text" name = "caixa2"><br>
    Telefone:<input type="text" name = "caixa3"><br>

    <input type = "submit" value="Enviar dados">
    <input type = "reset" value="Cancelar">
    </form>

    <form action="info.php">
        <input type="submit" value="Infomações">
    </form>

    <form action="home.php">
        <input type="submit" value="Voltar">
    </form>
    </body>
</html>