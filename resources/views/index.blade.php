<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Calculadora</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('storage/imagens/logo.jpg') }}" width="50" height="50" class="mr-2" alt="Logo">
                <strong class="px-4">Calculadora</strong>
            </a>
        </div>
    </div>
</header>

<div class="container py-4">
    <div class="row gy-4">


        <div class="col-md-3">
            <div class="card mb-4 shadow-sm" style="width: 18rem;">
                <img class="card-img-top figure-img img-fluid rounded" src="{{ asset('storage/imagens/mais.png') }}" alt="Imagem da soma">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSomar">
                        Somar
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card mb-4 shadow-sm" style="width: 18rem;">
                <img class="card-img-top figure-img img-fluid rounded" src="{{ asset('storage/imagens/menos.png') }}" alt="Imagem da subtração">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSubtrair">
                        Subtrair
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card mb-4 shadow-sm" style="width: 18rem;">
                <img class="card-img-top figure-img img-fluid rounded" src="{{ asset('storage/imagens/multiplicação.png') }}" alt="Imagem da multiplicação">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMultiplicar">
                        Multiplicar
                    </button>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card mb-4 shadow-sm" style="width: 18rem;">
                <img class="card-img-top figure-img img-fluid rounded" src="{{ asset('storage/imagens/divisão.png') }}" alt="Imagem da divisão">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDividir">
                        Dividir
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalSomar" tabindex="-1" aria-labelledby="modalSomarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSomarLabel">Informe a quantidade de números para somar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form method="GET" action="/somar">
          <input type="number" name="quantidade" min="2" class="form-control" required>
          <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalSubtrair" tabindex="-1" aria-labelledby="modalSubtrairLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSubtrairLabel">Informe a quantidade de números para subtrair</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form method="GET" action="/subtrair">
          <input type="number" name="quantidade" min="2" class="form-control" required>
          <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalMultiplicar" tabindex="-1" aria-labelledby="modalMultiplicarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMultiplicarLabel">Informe a quantidade de números para multiplicar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form method="GET" action="/multiplicar">
          <input type="number" name="quantidade" min="2" class="form-control" required>
          <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalDividir" tabindex="-1" aria-labelledby="modalDividirLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDividirLabel">Informe a quantidade de números para dividir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form method="GET" action="/dividir">
          <input type="number" name="quantidade" min="2" class="form-control" required>
          <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Enviar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
