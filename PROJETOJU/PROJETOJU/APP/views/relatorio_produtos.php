<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Produtos</title>    <style>        /* Adicione seu CSS para estilizar o PDF aqui */        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #000; text-align: left; }        th { background-color: #f2f2f2; }    </style>
</head>
<body>    <h1>Relatório de Produtos</h1>    <table>        <thead>            <tr>                <th>ID</th>                <th>Nome</th>                <th>Descrição</th>                <th>Preço</th>                <th>Quantidade</th>                <th>Data de Adição</th>            </tr>        </thead>        <tbody>            <?php foreach ($produtos as $produto): ?>                <tr>                    <td><?= $produto['id']; ?></td>
                    <td><?= $produto['nome']; ?></td>
                    <td><?= $produto['descricao']; ?></td>
                    <td><?= $produto['preco']; ?></td>
                    <td><?= $produto['quantidade']; ?></td>
                    <td><?= $produto['data_adicao']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>