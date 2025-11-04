<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Bitcoin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('image/inteligencia-artificial-bitcoin.jpg.webp');
            background-repeat: no-repeat;
            background-size: 100%
        }
        .btc-image {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        .ind {
            color: rgb(12, 0, 8);
            font-size: 700;
        }

    </style>
</head>
<body>

    <div class="container mt-5 text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Bitcoin.svg" 
             alt="Logo Bitcoin" 
             class="btc-image">

        <h1 class="ind">Bem-vindo ao Quiz Bitcoin!</h1>
        <p class="lead">Teste seus conhecimentos sobre o mundo das criptomoedas com {{$total_perguntas}} perguntas desafiadoras.</p>
        
        <a href="{{ route('responder') }}" class="btn btn-warning btn-lg text-dark">
            🚀 Iniciar Quiz
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
