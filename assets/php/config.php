<?php
    $conecction = mysqli_connect('localhost', 'root', '', 'form_recipes');
    //    cheking connection
    if(!$conecction){
        echo "não conectado";
    } echo "conectado ao banco";

    //capturing and checking if the data is in the data base
    $user = $_POST['user'];
    $user = mysqli_real_escape_string($conecction, $user);

    $sql = "SELECT USER_NAME FROM form_recipes.usuarios WHERE USER_NAME ='$user'";
    $return = mysqli_query($conecction, $sql);

    if (mysqli_num_rows($return) > 0){
        echo "This user name is already being used. Try other, please. ";
    } else {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pronoun = $_POST['pronoun'];
        $password = $_POST['password'];

        //inserting in the data base

        $sql = "INSERT INTO form_recipes.usuarios(USER_NAME, EMAIL, PRONOUN, PASSWORD_)
        VALUES ('$user', '$email', '$pronoun', '$password')";

        $result = mysqli_query($conecction, $sql);
        echo "USUARIO CADASTRADO COM SUCESSO(PFV!!!!!!!!)"; 
    }
?>