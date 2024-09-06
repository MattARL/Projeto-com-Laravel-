<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
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
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
    </style>
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <a href="{{ route('conta.create') }}" class="btn btn-primary mb-3">Cadastrar</a>

        <h2 class="mb-4">Listar as Contas</h2>

        <a href="{{ route('conta.show') }}" class="btn btn-secondary mb-2">Visualizar</a><br>
        <a href="{{ route('conta.edit') }}" class="btn btn-secondary mb-2">Editar</a><br>
        {{--<a href="{{ route('conta.destroy') }}" class="btn btn-danger mb-2">Apagar</a><br>--}}

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
