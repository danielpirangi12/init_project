<?php


    require_once("models/User.php");
    require_once("models/Message.php");


    class UserDAO implements UserDAOInterface{

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }

        public function buildUser($data) {

            $user = new User();

            $user->id = $data["id"]; 
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->registration = $data["registration"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->institution = $data["institution"];
            $user->city = $data["city"];
            $user->state = $data["state"];
            $user->level = $data["level"];
            $user->class = $data["class"];
            $user->imgprofile = $data["imgprofile"];
            $user->confirm = $data["confirm"];
            $user->token = $data["token"];
    
            return $user;
        }
    
        public function create(User $user, $authUser = false) {

            $stmt = $this->conn->prepare("INSERT INTO users(email, password, registration, name,
            lastname, institution, city, state, level, class, token
                ) VALUES(
                :email, :password, :registration, :name, :lastname, :institution, :city, :state, 
                :level, :class, :token
                )");

                $stmt->bindParam(":email", $user->email);
                $stmt->bindParam(":password", $user->password);
                $stmt->bindParam(":registration", $user->registration);
                $stmt->bindParam(":name", $user->name);
                $stmt->bindParam(":lastname", $user->lastname);
                $stmt->bindParam(":institution", $user->institution);
                $stmt->bindParam(":city", $user->city);
                $stmt->bindParam(":state", $user->state);
                $stmt->bindParam(":level", $user->level);
                $stmt->bindParam(":class", $user->class);
                $stmt->bindParam(":token", $user->token);

                $stmt->execute();

                // Autenticação de usuário, quando auth for true
                if($authUser) {
                    $this->setTokenToSession($user->token);
                }

        }

        public function update(User $user, $redirect = true) {

            $stmt = $this->conn->prepare("UPDATE users SET 
                email = :email,
                password = :password,
                registration = :registration,
                name = :name,
                lastname = :lastname,
                institution = :institution,
                city = :city,
                state = :state,
                level = :level,
                class = :class,
                imgprofile = :imgprofile,
                confirm = :confirm,
                token = :token
                WHERE id = :id
            ");
            
                $stmt->bindParam(":email", $user->email);
                $stmt->bindParam(":password", $user->password);
                $stmt->bindParam(":registration", $user->registration);
                $stmt->bindParam(":name", $user->name);
                $stmt->bindParam(":lastname", $user->lastname);
                $stmt->bindParam(":institution", $user->institution);
                $stmt->bindParam(":city", $user->city);
                $stmt->bindParam(":state", $user->state);
                $stmt->bindParam(":level", $user->level);
                $stmt->bindParam(":class", $user->class);
                $stmt->bindParam(":imgprofile", $user->imgprofile);
                $stmt->bindParam(":confirm", $user->confirm);
                $stmt->bindParam(":token", $user->token);
                $stmt->bindParam(":id", $user->id);

                $stmt->execute();

                if($redirect) {

                    //Recarregar pagina de perfil do usuario
                    $this->message->setMessage("Seja bem vindo!", "success", "classroom.php");
                }
        }

        public function verifyToken($protected = false) {
            
            if (!empty($_SESSION["token"])) {

                //Pegar o token da session

                $token = $_SESSION["token"];
                $user =  $this->findByToken($token);

                if ($user){
                    return $user;
                } else if($protected){
                    
                //Redirecionar usuario
                $this->message->setMessage("Faça login para acessar a página!", "error", "auth.php");

                }
            } else if($protected){
                    
                //Redirecionar usuario
                $this->message->setMessage("Faça login para acessar a página!", "error", "auth.php");

            }

        }

        public function setTokenToSession($token, $redirect = true) {
           
            // Salvar token na session
            $_SESSION["token"] = $token;

            if($redirect) {

                //Recarregar pagina com menssagem de usuario cadastrado
                $this->message->setMessage("Cadastro Realizado com Sucesso!", "success", "register.php");

            }
            
        }

        public function authenticateUser($email, $password) {

            $user = new User();

            $user = $this->findbyEmail($email);
            $user = new User();

            if ($user) {

                //checar se as senhas são iguais
                if(password_verify($password, $user->password)){

                        //Gerar token e inserir na session
                        $token = $user->generateToken();
                        
                        $this->setTokenToSession($token, false);
                
                        //Atualizar token no usuário
                        $user->token = $token;

                        $this->update($user, false);
                
                        return true;

                } else {

                    return false;
                }

            } else {

                return false;                

            }
            
        }

        public function findbyEmail($email) {

            if($email != "") {

                $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();

                if($stmt->rowCount() > 0) {

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user;

                } else {
                    return false;
                }

            } else {
                return false;
            }
            
        }

        public function findByID($id) {
            
        }

        public function findByToken($token) {

            if($token != "") {

                $stmt = $this->conn->prepare("SELECT * FROM users WHERE token = :token");
                $stmt->bindParam(":token", $token);
                $stmt->execute();

                if($stmt->rowCount() > 0) {

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user;

                } else {
                    return false;
                }

            } else {
                return false;
            }
            
        }

        public function destroyToken() {

            //Remover o token da session
            $_SESSION["token"] = "";

            //Redirecionar e apresentar a mensagem de sucesso
            $this->message->setMessage("Você fez o logout com sucesso!", "success", "auth.php");

        }

        public function changePassword(User $user) {
            
        }

    }


?>