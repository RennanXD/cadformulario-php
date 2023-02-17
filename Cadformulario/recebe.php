<html>
    <head><Title>Resultado do cadastro</Title></head>
    <body>
<?php 
    $no=$_POST['caixa1'];
    $cpf=$_POST['caixa2'];
    $tel=$_POST['caixa3']; 

    echo "Nome = {$no}<br>";
    echo "CPF = {$cpf}<br>";
    echo "Telefone = {$tel}<br>";

    ?>
    </body>
</html>    