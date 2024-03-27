<?php 

    require_once ("template/header.php");

?>


<div class="container col-md-6 containerCadastro" id="containerCadastro">
        <h4>Formulário de Cadastro</h4>
        <form action="<?= $BASE_URL ?>_auth_process.php" method="POST" class="row g-4">
            <input type="hidden" name="type" value="register">
            <div class="col-md-4">
                <label for="email" class="form-label">E-mail*</label>
                <input name="email" type="email" class="form-control" id="email" >
            </div>
            <div class="col-md-3">
                <label for="password" class="form-label">Senha*</label>
                <input name="password" type="password" class="form-control" id="password" >
            </div>
            <div class="col-md-3">
                <label for="confirmpassword" class="form-label">Confirmar Senha*</label>
                <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" >
            </div>
            <div class="col-md-2">
                <label for="registration" class="form-label">Marticula</label>
                <input name="registration" type="number" class="form-control" id="registration">
            </div>
            <div class="col-4">
                <label for="name" class="form-label">Nome*</label>
                <input name="name" type="text" class="form-control" id="name" >
            </div>
            <div class="col-4">
                <label for="lastname" class="form-label">Sobrenome*</label>
                <input name="lastname" type="text" class="form-control" id="lastname" >
            </div>
            <div class="col-md-4">
                <label for="institution" class="form-label">Instituição</label>
                <input name="institution" type="text" class="form-control" id="institution">
            </div>
            <div class="col-md-4">
                <label for="city" class="form-label">Cidade</label>
                <input name="city" type="text" class="form-control" id="city">
            </div>
            <div class="col-md-2">
                <label for="state" class="form-label">Estado</label>
                <input name="state" type="text" class="form-control" id="state">
            </div>
            <div class="col-md-3">
                <label for="level" class="form-label" required>Nível de Acesso*</label>
                <select name="level" id="level" class="form-select" >
                <option></option>
                <option>ADM</option>
                <option>Aluno</option>
                <option>Professor</option>
                <option>Visitante</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="class" class="form-label">Turma*</label>
                <select name="class" id="class" class="form-select" >
                <option></option>
                <option>EAD</option>
                <option>ESA</option>
                <option>GEO-Manhã</option>
                <option>GEO-Noite</option>
                <option>Visitante</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="imgprofile" class="form-label">Enviar foto de Perfil</label>
                <input class="form-control" type="file" id="imgprofile">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input name="confirm" class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Enviar confirmação de cadastro por e-mail</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success card-btn">Cadastrar</button>
            </div>
        </form>
        <div>
            <br>
            <div class="row">
                <span><a href="lista_de_usuarios.php">Lista de Cadastro</a></span>
            </div>
        </div>
    </div>

<?php
    require_once ("template/footer.php");
?>