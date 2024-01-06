<?php
    //if(isset($_POST['submit'])){
    //    print_r($_POST['email']);
    //}

        include_once('assets/php/config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $final = mysqli_query($connection, "INSERT INTO usuarios(email, senha) VALUES ('$email', '$password')");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Recipes</title>
</head>

<body>
    <main id="container">
        <form action="index.php" method="POST" id="login_esp">
            <div id="header_login">
                <div id="img_box">
                    <img src="assets/images/cakee.png" alt="bolo">
                </div>
                <h1>RECIPES</h1>
                <h2>Login</h2>
                <i id="moon_icon" class="fa-solid fa-moon"></i>

            </div>

            <div id="opc_login">
                <a href="#">
                    <img src="assets/images/gg_icon.png" alt="google">
                </a>
                <a href="#">
                    <img src="assets/images/insta_icon.png" alt="instagram">
                </a>
                <a href="#">
                    <img src="assets/images/face_icon.png" alt="email">
                </a>
            </div>

            <div id="inputs">
                <div class="input_caixa">
                    <label for="email">
                        E-mail
                        <div class="input_field">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="email" id="email">
                        </div>
                    </label>
                </div>

                <div class="input_caixa">
                    <label for="password">
                        Senha
                        <div class="input_field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" id="password">
                        </div>
                    </label>
                </div>
                <a href="#" id="esqueceu_senha">Esqueceu sua senha?</a>
                <button type="submit" name="submit" id="button">Entrar</button>
            </div>


        </form>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>