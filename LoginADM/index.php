<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Public/Js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="Public/Css/index.css">
    <title>Serene Library - ADM</title>
</head>
<body class= "background" style="background-image: url('../Figma/background.PNG');">
    <?php
        session_start();
        include '../Login/verifica_login.php'
    ?>
    <div class="container">
    <h2>Bem vindo de volta <?php echo $_SESSION['usuarioNomedeUsuario'] ,"!"; ?> </h2>
    <button id="log" onclick="logout()"><ion-icon name="log-out-outline"></ion-icon></button><br>
    
        <a href="equipes.php">Admininstrar EQUIPES</a>
        <a href="users.php">Admininstrar USUÁRIOS</a>
        <a href="modalidades.php">Admininstrar MODALIDADES</a>
    </div>
</body>
</html>