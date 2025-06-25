<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adição</title>
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
        <form method="POST" action="/calcularSoma">
            @csrf
            <input type="hidden" name="quantidade" value="{{ $quantidade }}">
            @for ($i = 1; $i <= $quantidade; $i++)
                <div class="form-group">
                    <label for="valor{{$i}}">Informe o valor:</label>
                    <input type="number" class="form-control" name="valor[]" id="valor{{$i}}" required>
                </div>
            @endfor
            <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
            <a class="btn btn-sm btn-danger" href="/">Cancelar</a>
        </form>
    </div>
</body>
</html>
