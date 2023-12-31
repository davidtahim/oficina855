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

<header class="sticky-top">
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <i class="bi-bootstrap me-2" width="40" height="32" role="img" aria-label="Bootstrap"></i>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <i class="bi-house d-block mx-auto mb-1" width="24" height="24"></i>
                Início
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-speedometer2 d-block mx-auto mb-1" width="24" height="24"></i>
                Painel
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-table d-block mx-auto mb-1" width="24" height="24"></i>
                Pedidos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-grid d-block mx-auto mb-1" width="24" height="24"></i>
                Produtos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi-person-circle d-block mx-auto mb-1" width="24" height="24"></i>
                Clientes
              </a>
            </li>
            <li>
            <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </header>
  <main class="mx-auto p-4" style="width: 800px;">
    
<section class="container text-center">  
  <h1>Sistema de Pedidos</h1>
</section>
<h2>Informe os itens e as quantidades</h2>
  <form action="script/pedido.php" method="post">
  <div class="mb-3">
    <label for="qtdoleo" class="form-label">Quantidade de óleo</label>
    <input type="number" min="0" max="200" value="10"
      class="form-control" name="qtdoleo" id="qtdoleo">
  </div>
  <div class="mb-3">
    <label for="qtdpneu" class="form-label">Quantidade de Pneu</label>
    <input type="number" min="0" max="200" value="10"
      class="form-control" name="qtdpneu" id="qtdpneu">
  </div>
  <div class="mb-3">
    <label for="qtdvela" class="form-label">Quantidade de Vela</label>
    <input type="number" min="0" max="200" value="10"
      class="form-control" name="qtdvela" id="qtdvela">
  </div>
  <div class="mb-3">
    <label for="cliente" class="form-label">Onde nos achou</label>
    <select class="form-select form-select-lg" name="cliente" id="cliente">
    <option value="a" >Um cliente costumeiro</option>
    <option value="b">Televisão</option>
    <option value="c">Telefone</option>
    <option value="d">Boca a boca</option>
    </select>
  </div>
  <button type="submit" class="btn btn-info">Enviar</button>
  </form>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>   
</html>