<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Remédios</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #56ccf2, #2f80ed);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .button-container {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
        }
        .button-container a, .search-container button {
            background: #2d9cdb;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .button-container a:hover, .search-container button:hover {
            background: #2f80ed;
        }
        .search-container input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-right: 10px;
        }
        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background: #fff;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f2f2f2;
        }
        td {
            background: #fff;
        }
        a.edit, form button {
            background: #56ccf2;
            border: none;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        a.edit:hover, form button:hover {
            background: #2f80ed;
        }
        @media (max-width: 768px) {
            table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <h1>Lista de Remédios</h1>
    <div class="button-container">
        <a href="/">Adicionar Novo Remédio</a>
        <a href="/maisCaro">Remédio Mais Caro</a>
        <a href="/maiorQuantidade">Remédio com Maior Quantidade</a>
    </div>
    <div class="search-container">
        <form action="/search" method="post">
            <input type="text" name="nome" placeholder="Pesquisar remédio">
            <button type="submit">Pesquisar</button>
        </form>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Laboratório</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultado as $remedio): ?>
                    <tr>
                        <td><?= $remedio['nome'] ?></td>
                        <td><?= $remedio['laboratorio'] ?></td>
                        <td><?= $remedio['quantidade'] ?></td>
                        <td><?= $remedio['preco'] ?></td>
                        <td>
                            <a class="edit" href="/edit/<?= $remedio['id'] ?>">Editar</a>
                            <form action="/delete/<?= $remedio['id'] ?>" method="post" style="display:inline;">
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
                    