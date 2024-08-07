<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Remédio</title>
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
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        label {
            font-size: 1rem;
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        button {
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
        button:hover {
            background: #2f80ed;
        }
        @media (max-width: 768px) {
            form {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <h1>Editar Remédio</h1>
    <form action="/update/<?= $remedio['id'] ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $remedio['nome'] ?>" required>
        
        <label for="laboratorio">Laboratório:</label>
        <input type="text" id="laboratorio" name="laboratorio" value="<?= $remedio['laboratorio'] ?>" required>
        
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" value="<?= $remedio['quantidade'] ?>" required>
        
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" value="<?= $remedio['preco'] ?>" required>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
