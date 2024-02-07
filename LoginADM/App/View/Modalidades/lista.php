<!DOCTYPE html>
<html>
<head>
    <title>MODALIDADES</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Modalidades</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Regras</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <?php foreach ($modalidades as $modalidade): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $modalidade['id_modalidade']; ?></td>
                            <td><?php echo $modalidade['nome']; ?></td>
                            <td><?php echo $modalidade['regras']; ?></td>
                            <td><?php echo $modalidade['data']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>