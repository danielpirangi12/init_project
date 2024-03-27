<?php


    require_once("template/header.php");

    if($userDao) {

        $userDao->destroyToken();
    }


?>