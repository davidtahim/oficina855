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
    $qtdtotal = 0;
    $qtdtotal = $qtdoleo + $qtdpneu + $qtdvela;
    echo "<p> Quantidade de itens solicitados ". $qtdtotal."</p>";
    $valortotal = 0.00;
    // Definindo as constantes
    define('PRECOPNEU', 100);
    define('PRECOOLEO', 10); 
    define('PRECOVELA', 4);

        echo "<p> Pedido processado ás ".date('H:i:s')."</p>";
        echo "<p> Quantidade de caixas de óleo ". $qtdoleo."</p>";
        echo "<p> Quantidade de caixas de pneu ". $qtdpneu."</p>";
        echo "<p> Quantidade de caixas de vela ". $qtdvela."</p>";
        $valortotal = $qtdoleo * PRECOOLEO + $qtdpneu * PRECOPNEU + $qtdvela * PRECOVELA;
        echo "<p>Subtotal: R$".number_format($valortotal,2)."</p>";
    $taxa = 0.10; //represnta o valor de taxa
    $totalcomimposto = $valortotal * (1 + $taxa);
    echo "<p> Taxa de impostos: ". $taxa."</p>"; 
    echo "<p>Valor com Imposto: R$".number_format($totalcomimposto,2)."</p>";

    //trabalhando com o se
    if ($qtdtotal == 0) {
        echo '<p style="color:red">';
        echo 'Faça sua solicitação preenchendo os itens da página anterior';
        echo '</p>';
    } else {
        if ($qtdoleo > 0) 
        echo "<p> Quantidade de caixas de óleo ". $qtdoleo."</p>";
        if ($qtdpneu > 0) 
            echo "<p> Quantidade de caixas de pneu ". $qtdpneu."</p>";
        if ($qtdvela > 0)
            echo "<p> Quantidade de caixas de vela ". $qtdvela."</p>";
    }

if ($qtdpneu < 10) {
    $desconto = 0;
} elseif (($qtdpneu >=10) && ($qtdpneu <=49)) {
    $desconto = 5;
} elseif (($qtdpneu >=50) && ($qtdpneu <=99)) {
    $desconto = 10;
} elseif ($qtdpneu >= 100) {
    $desconto = 15;
}

echo "<p> Seus descontos nos pneus será de ". $desconto."</p>";

//rever pq não pegou a varável
switch ($publicidade) {
    case "a":
        echo "<p>Cliente Costumeiro</p>";
        break;
        case "b":
            echo "<p>Televisão</p>";
            break;
        case  "c":
            echo "<p>Telefone</p>";
            break;
        case "d":
            echo "<p>Boca a Boca</p>";
            break;    
    default:
    echo "<p>Cliente não informou de onde veio</p>";
        break;
}

    ?>
    <a href="http://localhost/oficina/index.php">Voltar</a>
</body>
</html>