<?php
require_once '../Config/config.php';
require_once 'App/Controller/EquipeController.php';

$equipeController = new EquipeController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['cor']) &&
    isset($_POST['modalidade']) &&
    isset($_POST['participantes']))
{
    $equipeController->criarEquipe($_POST['nome'], $_POST['cor'], $_POST['modalidade'], $_POST['participantes']);
    header('Location: #');
}

// Atualizar EQUIPES
if (isset($_POST['id_equipe']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_cor']) && isset($_POST['atualizar_modalidade'])&& isset($_POST['atualizar_participantes'])) {
    $equipeController->atualizarEquipe($_POST['id_equipe'], $_POST['atualizar_nome'], $_POST['atualizar_cor'], $_POST['atualizar_modalidade'], $_POST['atualizar_participantes']);
}

// Excluir EQUIPES
if (isset($_POST['excluir_id'])) {
    $equipeController->excluirEquipe($_POST['excluir_id']);
}

$equipes = $equipeController->listarEquipes();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>EQUIPES</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Equipes</h1>
    </header>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome da equipe" required>
        <input type="text" name="cor" placeholder="Cor" required>
        <input type="text" name="modalidade" placeholder="Modalidade" required>
        <input type="text" name="participantes" placeholder="Participantes" required>
        <button type="submit">Adicionar Equipe</button>
    </form>

    <?php
        $equipeController->exibirListaEquipes();
    ?>

    <h2>Atualizar Equipe</h2>
    <form method="post">
        <select name="id_equipe">
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipes['id_equipe']; ?>"><?php echo $equipes['equipe']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_nome" placeholder="Novo Nome" required>
        <input type="text" name="atualizar_cor" placeholder="Nova cor" required>
        <input type="text" name="atualizar_modalidade" placeholder="Nova modalidade" required>
        <input type="text" name="atualizar_participantes" placeholder="Novos participantes" required>
        <button type="submit">Atualizar Equipes</button>
    </form>

    <h2>Excluir Equipes</h2>
    <form method="post">
        <select name="excluir_id">
            <?php foreach ($equipes as $equipe): ?>
                <option value="<?php echo $equipes['id_equipe']; ?>"><?php echo $equipes['equipe']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Equipe</button>
    </form>
</body>
</html>