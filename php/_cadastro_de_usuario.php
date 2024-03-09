<?php

    include 'conexao.php';

    $email1 = $_POST['email1'];
    $senha = $_POST['senha'];
    $numberid = $_POST['numberid'];
    $name1 = $_POST['name1'];
    $name2 =  $_POST['name2'];
    $city = $_POST['city'];
    $type2 =  $_POST['type2'];
    $classt = $_POST['classt'];
    $confirm = $_POST['confirm'];
 
    $sql = "INSERT INTO `cadastro`(`email1`, `senha`, `numberid`, `name1`, `name2`, `city`, `type2`, `classt`, `confirm`) VALUES ('$email1',$senha,$numberid,'$name1','$name2','$city','$type2','$classt','$confirm')";

    $inserir = mysqli_query($conexao,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>