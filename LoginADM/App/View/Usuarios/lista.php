<!DOCTYPE html>
<html>
<head>
    <title>USUÁRIOS</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Usuários</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Níveis de Permissão</th>
                    </tr>
                </thead>
                <?php foreach ($users as $user): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['nome']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['senha']; ?></td>
                            <td><?php echo $user['tipo_usuario']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>