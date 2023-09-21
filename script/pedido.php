<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="http://localhost/oficina/css/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand navbar bg-dark">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link text-white" href="http://localhost/oficina/index.php">Início</a>
    </div>
</nav>
    </nav>
<main class="mx-auto p-4" style="width: 800px;">
    
        <h1>Sistema de Pedidos</h1>
        <h2>Lista de Pedidos</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Itens</h4>
        <!-- Início do Código PHP -->
        <?php
        // Criando as variáveis
        $qtdoleo = $_POST ['qtdoleo'];
        $qtdpneu = $_POST ['qtdpneu'];
        $qtdvela = $_POST ['qtdvela'];
        $cliente = $_POST ['cliente'];
        $qtdtotal = 0;
        $qtdtotal = $qtdoleo + $qtdpneu + $qtdvela;
        $valortotal = 0.00;
        // Definindo as constantes
        define('PRECOPNEU', 100);
        define('PRECOOLEO', 10); 
        define('PRECOVELA', 4);
        ?>
                <p class="card-text">Quantidade de itens solicitados <?php echo $qtdtotal;?></p>
            </div>
            <div class="card-header">
               <div class="alert alert-primary" role="alert">
               <?php echo "Pedido processado ás ".date('H:i:s')?>
               </div>
               
            </div>
            <!-- Início do Código SE -->
            <?php
           //trabalhando com o se
           if ($qtdtotal == 0) {
               echo '<div class="alert alert-danger" role="alert">';
               echo 'Faça sua solicitação preenchendo os itens da página anterior';
               echo '</div>';
           } else {
               if ($qtdoleo > 0) 
               ?>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php echo "<p> Quantidade de caixas de óleo ". $qtdoleo."</p>";?>
                </li>
                <li class="list-group-item">
                    <?php 
                   if ($qtdpneu > 0) 
                   echo "<p> Quantidade de caixas de pneu ". $qtdpneu."</p>";
                   ?>
                </li>
                <li class="list-group-item">
                    <?php 
                   if ($qtdvela > 0)
                   echo "<p> Quantidade de caixas de vela ". $qtdvela."</p>";
                }
                   ?>
                </li>
            </ul>    
            <div class="card-footer">
            <?php 
             $resultadooleo = $qtdoleo * PRECOOLEO;
             $resultadopneu = $qtdpneu * PRECOPNEU;
             $resultadovela = $qtdvela * PRECOVELA;
             $valortotal =  $resultadooleo + $resultadopneu  + $resultadovela;
             echo "Subtotal (sem desconto e sem imposto): R$".number_format($valortotal,2);
            ?>
  </div>

  <?php        
 //cálculo do desconto do pneu
 if ($qtdpneu < 10) {
     $desconto = 0;
 } elseif (($qtdpneu >=10) && ($qtdpneu <=49)) {
     $desconto = 5;
 } elseif (($qtdpneu >=50) && ($qtdpneu <=99)) {
     $desconto = 10;
 } elseif ($qtdpneu >= 100) {
     $desconto = 15;
 }
 $descontopneu = $resultadopneu * ($desconto/100);
 $pneucomdesconto = $resultadopneu - $descontopneu;
$valortotal =  $resultadooleo + $pneucomdesconto  + $resultadovela;
$taxa = 0.10; //represnta o valor de taxa
$totalcomimposto = $valortotal * (1 + $taxa);
?>
        </div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Descontos</h4>
        <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <?php  echo "Desconto: ".$desconto."%";?>
                </li>
        </ul>        
    </div>
</div>
            <?PHP        
            //cálculo do desconto do pneu
            if ($qtdpneu < 10) {
                $desconto = 0;
            } elseif (($qtdpneu >=10) && ($qtdpneu <=49)) {
                $desconto = 5;
            } elseif (($qtdpneu >=50) && ($qtdpneu <=99)) {
                $desconto = 10;
            } elseif ($qtdpneu >= 100) {
                $desconto = 15;
            }
                echo "<p> Desconto: ".$desconto."% </p>";
            $descontopneu = $resultadopneu * ($desconto/100);
            $pneucomdesconto = $resultadopneu - $descontopneu;
    
        $valortotal =  $resultadooleo + $pneucomdesconto  + $resultadovela;
        $taxa = 0.10; //represnta o valor de taxa
        $totalcomimposto = $valortotal * (1 + $taxa);
        echo "<p> Taxa de impostos: ". $taxa."</p>"; 
        echo "<p>Valor Total com Imposto: R$".number_format($totalcomimposto,2)."</p>";
    
    
    
    
    echo "<p> Seus descontos nos pneus será de R$ ". $pneucomdesconto."</p>";
    
    
    switch($cliente) {
        case "a" :
          echo "<p>Cliente Costumeiro</p>";
          break;
        case "b" :
          echo "<p>Televisão</p>";
          break;
        case "c" :
          echo "<p>Telefone.</p>";
          break;
        case "d" :
          echo "<p>Boca a boca</p>";
          break;
        default :
          echo "<p>Cliente não informou de onde veio</p>";
          break;
      }
    
        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</main>
</body>
</html>