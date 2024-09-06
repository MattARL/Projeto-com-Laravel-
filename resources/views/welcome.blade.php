<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Laravel</title>
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
                text-align: center;
            }
            .btn-primary {
                background-color: #007bff;
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="mb-4">Projeto Laravel</h1>
            <a href="{{ route('conta.index') }}" class="btn btn-primary">Listar as Contas</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
