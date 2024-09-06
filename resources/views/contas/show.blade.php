<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visual</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #f8f9fa;
        }
        .container {
            background-color: #495057;
            padding: 2rem;
            border-radius: .5rem;
        }
        .alert-success {
            background-color: #28a745;
            color: #f8f9fa;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <a href="{{ route('conta.index') }}" class="btn btn-primary mb-3">Listar</a>

        <h2 class="mb-4">Detalhes da Conta</h2>

        {{-- Verificar se existe a sessão success e imprimir o valor --}}
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>