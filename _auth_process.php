<?php

require_once("_globals.php");
require_once("_db.php");
require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("models/Message.php");


$message = new Message($BASE_URL);

$userDao = new userDAO($conn, $BASE_URL);

//FAZER RESGATE DO TIPO DE FORMULÁRIO
$type = filter_input(INPUT_POST, "type");


//FAZER VERIFICAÇÃO NO TIPO DE FORMULÁRIO ANTES DE ENVIAR DADOS
if($type === "register") {

    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
    $registration = filter_input(INPUT_POST, "registration");
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $institution = filter_input(INPUT_POST, "institution");
    $city = filter_input(INPUT_POST, "city");
    $state = filter_input(INPUT_POST, "state");
    $level = filter_input(INPUT_POST, "level");
    $class = filter_input(INPUT_POST, "class");
    // $imgprofile = filter_input(INPUT_POST, "imgprofile");
    // $confirm = filter_input(INPUT_POST, "confirm");

    //Requisitos minimos
    if($email && $password && $name && $lastname && $level && $class) {

        //verificação de senha
        if($password === $confirmpassword){

            //verificar se o e-mail já está registrado no banco
            if($userDao->findbyEmail($email) === false) {

                $user = new User();

                // criação de token e senha
                $userToken = $user->generateToken();
                $finalPassword = $user->generatePassword($password);

                $user->email = $email;
                $user->password = $finalPassword;
                $user->registration = $registration;
                $user->name = $name;
                $user->lastname = $lastname;
                $user->institution = $institution;
                $user->city = $city;
                $user->state = $state;
                $user->level = $level;
                $user->class = $class;
                $user->imgprofile = $imgprofile;
                $user->confirm = $confirm;
                $user->token = $userToken;

                $auth = true;

                $userDao->create($user, $auth);


            } else {

                $message->setMessage("Usuário já cadastrado!", "error", "back");

            }

        } else {
            $message->setMessage("As senhas não são iguais!", "error", "back");
        }

    } else {

        //Enviar uma msg de erro, de dados faltantes
        $message->setMessage("Por favor, preencha todos os campos obrigatórios(*).", "error", "back");
    }

} else if($type === "login"){


    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    //Tentar autenticar usuário
    if($userDao->authenticateUser($email, $password)) {


        $message->setMessage("Seja bem vindo!", "success", "classroom.php");

    //redirecionar, caso não autentique o usuario
    } else {



        $message->setMessage("Usuário e/ou senha incorretos.", "error", "back");
    }

} else {



    $message->setMessage("Informações inválidas!", "error", "index.php");

}


?>