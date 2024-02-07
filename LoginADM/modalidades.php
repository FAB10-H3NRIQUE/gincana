<?php
require_once '../Config/config.php';
require_once 'App/Controller/ModalidadeController.php';

$modalidadeController = new ModalidadeController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['regras']) &&
    isset($_POST['data']));
{
    $modalidadeController->criarModalidade($_POST['nome'], $_POST['regras'], $_POST['data']);
    header('Location: #');
}

// Atualizar MODALIDADES
if (isset($_POST['id_modalidade']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_regras']) && isset($_POST['atualizar_data'])) {
    $modalidadeController->atualizarModalidade($_POST['id_modalidade'], $_POST['atualizar_nome'], $_POST['atualizar_regras'], $_POST['atualizar_data']);
}

// Excluir MODALIDADES
if (isset($_POST['excluir_id'])) {
    $modalidadeController->excluirModalidade($_POST['excluir_id']);
}

$modalidades = $modalidadeController->listarModalidades();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>MODALIDADES</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Modalidades da gincana</h1>
    </header>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome da modalidade" required>
        <input type="text" name="regras" placeholder="Regras" required>
        <input type="datetime-local" name="data" placeholder="Data da modalidade" required>
        <button type="submit">Adicionar Modalidade</button>
    </form>

    <?php
        $modalidadeController->exibirListaModalidades();
    ?>

    <h2>Atualizar Modalidade</h2>
    <form method="post">
        <select name="id_modalidade">
            <?php foreach ($modalidades as $modalidade): ?>
                <option value="<?php echo $modalidade['id_modalidade']; ?>"><?php echo $modalidade['modalidade']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_nome" placeholder="Novo Nome" required>
        <input type="text" name="atualizar_regras" placeholder="Novas Regras" required>
        <input type="password" name="atualizar_data" placeholder="Nova Data" required>
        <button type="submit">Atualizar Modalidades</button>
    </form>

    <h2>Excluir Modalidade</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($modalidades as $modalidade): ?>
                <option value="<?php echo $modalidade['id_modalidade']; ?>"><?php echo $modalidade['modalidade']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Modalidade</button>
    </form>
</body>
</html>