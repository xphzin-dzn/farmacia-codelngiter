<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédio Mais Caro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #56ccf2, #2f80ed);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .info-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        a {
            background: #2d9cdb;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.3s ease;
            display: inline-block;
            margin-top: 20px;
        }
        a:hover {
            background: #2f80ed;
        }
        @media (max-width: 768px) {
            .info-container {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <h1>Remédio Mais Caro</h1>
    <div class="info-container">
        <p><strong>Nome:</strong> <?= $remedio['nome'] ?></p>
        <p><strong>Laboratório:</strong> <?= $remedio['laboratorio'] ?></p>
        <p><strong>Quantidade:</strong> <?= $remedio['quantidade'] ?></p>
        <p><strong>Preço:</strong> R$ <?= $remedio['preco'] ?></p>
        <a href="/showForm">Voltar</a>
    </div>
</body>
</html>
