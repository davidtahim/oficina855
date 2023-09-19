<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="css/principal.css">
</head>
<body>
    <h1>Sistema de Pedidos</h1>
    <form action="script/pedido.php" method="post">
        <table>
            <th>Itens</th>
            <th>Quantidade</th>
        <tr>
            <td>Óleo</td>
            <td><input type="number" name="qtdoleo" id="qtdoleo" min="0" max="200" value="10"></td>
        </tr>
        <tr>
            <td>Pneu</td>
            <td><input type="number" name="qtdpneu" id="qtdpneu" min="0" max="200" value="10"></td>
        </tr>
        <tr>
            <td>Vela</td>
            <td><input type="number" name="qtdvela" id="qtdvela" min="0" max="200" value="10"></td>
        </tr>
        <tr>
            <td>Como você nos achou</td>
            <td><select name="cliente" id="cliente">
                <option value="a" >Um cliente costumeiro</option>
                <option value="b">Televisão</option>
                <option value="c">Telefone</option>
                <option value="d">Boca a boca</option>
            </select></td>
        </tr>
        </table>
        <input type="submit" value="Enviar">
    </form>
  </body>   
</body>
</html>