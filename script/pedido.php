<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="/css/principal.css">
</head>
<body>
    <h1>Sistema de Pedidos</h1>
    <h2>Lista de Pedidos</h2>
    <?php
    // Criando as variáveis
    $qtdoleo = $_POST ['qtdoleo'];
    $qtdpneu = $_POST ['qtdpneu'];
    $qtdvela = $_POST ['qtdvela'];

        echo "<p> Pedido processado ás ".date('H:i:s')."</p>";
        echo "<p> Quantidade de caixas de óleo ". $qtdoleo."</p>";
        echo "<p> Quantidade de caixas de pneu ". $qtdpneu."</p>";
        echo "<p> Quantidade de caixas de vela ". $qtdvela."</p>";
    ?>
    <a href="http://localhost/oficina/index.php">Voltar</a>
</body>
</html>