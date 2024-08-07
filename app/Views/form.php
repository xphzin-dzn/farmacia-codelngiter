<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Remédio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        form {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            display: block;
            width: 100%;
            padding: 15px;
            background: #ff6347;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #ff4500;
        }
        @media (max-width: 768px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <form action="/receba" method="post">
        <h1>Adicionar Remédio</h1>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <label for="laboratorio">Laboratório:</label>
        <input type="text" id="laboratorio" name="laboratorio" required><br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
