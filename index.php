<?php
    include_once('assets/php/config.php');

    $user = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $gender = isset($_POST['genero']) ? $_POST['genero'] : '';
    $password = isset($_POST['senha']) ? $_POST['senha'] : '';


    $cadastro = mysqli_query($connection, "INSERT INTO USUARIOS(NOME_USER, GENERO, EMAIL, SENHA) VALUES ('$user', '$gender', '$email', '$password')");

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
    <section id="lado_esq">
        <nav>
            <ul>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </nav>
    
        <div id="intro">
            <h1 id="title">Welcome to your new cookbook!</h1>
            <h2 id="sub_title">Save your recipes and share with the communite.</h2>
            <img src="assets/images/full_cake.png" alt="">
        </div>
    </section>

    <main id="container">
        <form action="index.php" id="cad_spc" method="POST">
            <div class="header_cab">
                <h2>RECIPES</h2>
                <h3>Sign Up</h3>
                <i id="moon_icon" class="fa-solid fa-moon"></i>
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
            </div>

            <div id="inputs">
                <div class="input_caixa">
                    <label for="usuario">
                        User Name
                        <div class="input_field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="usuario">
                        </div>
                    </label>
                </div>

                <div class="input_caixa">
                    <label for="email">
                        E-mail
                        <div class="input_field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email">
                        </div>
                    </label>
                </div>
                
                <div class="input_caixa" id="pronome">
                        <label for="pronome">
                            Pronoun
                            <div class="input_field">
                                <i class="fa-solid fa-person"></i>
                                <input type="text" id="pronoun" list="ipronoun">
                                <datalist id="ipronoun">
                                    <option>she/her</option>
                                    <option>he/him</option>
                                    <option>other</option>
                                </datalist>
                            </div>
                        </label>
                    </div>

                <div class="input_caixa">
                    <label for="password">
                        Password
                        <div class="input_field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="password">
                        </div>
                    </label>
                </div>
                <a href="pag_log.php" id="tenho_conta">I've an account :) </a>
            </div>
            <div id="botao">
                <button type="submit" id="button">Sign Up</button>
            </div>
        </form>
    </main>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>