<<<<<<< HEAD
<?php

$db_name = "lagsig";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

try {
    //conexão orientada a objetos
    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    //habilitar erros PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit();
}

=======
<?php

$db_name = "lagsig";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

try {
    //conexão orientada a objetos
    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    //habilitar erros PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit();
}

>>>>>>> 24497a6b7faea83b43767663d26db345a9964346
?>