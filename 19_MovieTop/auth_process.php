<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDAO = new UserDAO($conn, $BASE_URL);
    
//Verifica o tipo do formulário e eliminação de possível dado malicioso.
$type = filter_input(INPUT_POST, "type");

// Verificaçãodo tipo do fomrulário
if($type === "register") {

    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    // Verificação de dados mínimos
    if($name && $lastname && $email && $password) {

        // Verificar se as senhas batem.
        if($password === $confirmpassword) {

            // Verificar se o email já está cadastrado no sistema.
            if($userDAO->findByEmail($email) === false) {

                $user = new User();

                //Criação de token e senha.
                $userToken = $user->generateToken();
                $finalPassword = $user->generatePassword($password);

                $user->name = $name;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->password = $finalPassword;
                $user->token = $userToken;

                $auth = true;

                $userDAO->create($user, $auth);

            } else {
                // Enviar uma mensagem de erro: Usuário já existe.
                $message->setMessage("Usuário já cadastrado. Tente outro email.", "error", "back");
            }


        } else {
        // Enviar uma mensagem de erro, caso a senha não bater.
        $message->setMessage("As senhas não são iguais.", "error", "back");

        }

    } else {
        // Enviar uma mensagem de erro de dados faltantes.
        $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

    }

} else if($type === "login") {

}