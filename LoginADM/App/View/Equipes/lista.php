<!DOCTYPE html>
<html>
<head>
    <title>EQUIPES</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de EQUIPES</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cor</th>
                        <th>Modalidade</th>
                        <th>Participantes</th>
                    </tr>
                </thead>
                <?php foreach ($equipes as $equipe): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $equipe['id_equipe']; ?></td>
                            <td><?php echo $equipe['nome']; ?></td>
                            <td><?php echo $equipe['cor']; ?></td>
                            <td><?php echo $equipe['modalidade']; ?></td>
                            <td><?php echo $equipe['participantes']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>