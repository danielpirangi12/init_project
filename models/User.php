<?php
session_start();

    class User{
        public $id;
        public $email;
        public $password;
        public $registration;
        public $name;
        public $lastname;
        public $institution;
        public $city;
        public $state;
        public $level;
        public $class;
        public $imgprofile;
        public $confirm;
        public $token;

        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function generatePassword($password) {
            return password_hash($password, PASSWORD_DEFAULT);
            
        }
    }


    interface UserDAOInterface {

        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user, $redirect = true);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function findbyEmail($email);
        public function findByID($id);
        public function findByToken($token);
        public function destroyToken();
        public function changePassword(User $user);
        

    }
?>