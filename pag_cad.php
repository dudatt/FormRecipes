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
    <style>
        #lado_esq {
            position: absolute;
            width:55%;
            z-index: 1;
        }

        ul {
            display: flex;
            flex-direction: row;
            list-style: none;
            gap: 40px;
            margin-top: 30px;
            justify-content: center;
        }

        a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
            font-size:18px;
            transition: 0.3s;
        }

        a:hover {
            transform: scale(1.08);
            font-size: 20px;
        }

        #intro {
            position: absolute;
            justify-content: center;
            text-align: center;
            top: 200px;
            left: 95px;
        }

        #title {
            font-size: 40px;
            font-weight: bolder;
        }

        #sub_title {
            text-indent: 10px;
            font-weight: normal;
            font-size: 25px;
        }

        #cad_spc {
            position: relative;
            background: var(--cor-light-1-1);
            display: flex;
            flex-direction: column;
            width: 40%;
            height: 100%;
            left: 447px;
            border-radius: 20px 0 0 20px;
        }

        h2 {
            font-size: 30px;
        }

        .header_cab {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 30px 0 15px 0; 
        }

        #inputs {
            gap: 30px;
        }

        #nasc_gen {
            position: relative;
        }

        #genero{
            position: absolute;
            left: 50%;
            top: 4.5px;
        }

        #tenho_conta {
            color: var(--cor-light-1-3);
            font-size: 15px; 
            transition: 0.3s;
            text-decoration: none;
        }

        #tenho_conta:hover {
            transform: scale(1.05);
            font-size: 17px;
        }

    </style>
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
            <img src="#" alt="">
        </div>
    </section>

    <main id="container">
        <form action="" id="cad_spc">
            <div class="header_cab">
                <h2>RECIPES</h2>
                <h3>Sign Up</h3>
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
                    <label for="usuario">
                        User Name
                        <div class="input_field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="usuario" id="usuario">
                        </div>
                    </label>
                </div>

                <div class="input_caixa">
                    <label for="email">
                        E-mail
                        <div class="input_field">
                            <i class="fa-solid fa-user"></i>
                            <input type="email" name="email" id="email">
                        </div>
                    </label>
                </div>
                
                <div id="nasc_gen">
                    <div class="input_caixa">
                        <label for="data_nasc">
                            Date of birth
                            <div class="input_field">
                                <i class="fa-solid fa-user"></i>
                                <input type="date" name="data_nasc" id="data_nasc">
                            </div>
                        </label>
                    </div>

                    <div class="input_caixa" id="genero">
                        <label for="genero">
                            Gender
                            <div class="input_field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" name="genero" id="genero">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="input_caixa">
                    <label for="password">
                        Password
                        <div class="input_field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" id="password">
                        </div>
                    </label>
                </div>
                <a href="#" id="tenho_conta">I've an account :) </a>
                <button type="submit" id="button">Sign Up</button>
            </div>
        </form>
    </main>
</body>
</html>