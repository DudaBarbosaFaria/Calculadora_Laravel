<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('storage/imagens/logo.jpg') }}" width="50" height="50">
                    <strong class="px-4">Calculadora</strong>
                </a>
            </div>
        </div>
    </header>
    <div class="container py-4">
        <form method="POST" action="/resultadoMultiplicacao">
            @csrf
            <input type="hidden" name="quantidade" value="{{ $quantidade }}">
            @for ($i = 1; $i <= $quantidade; $i++)
                <div class="form-group">
                    <label>Informe o valor:</label>
                    <input type="number" class="form-control" name="valor[]" required>
                </div>
            @endfor
            <button type="submit" class="btn btn-sm btn-primary">Multiplicar</button>
            <a class="btn btn-sm btn-danger" href="/">Cancelar</a>
        </form>
    </div>
</body>
</html>
