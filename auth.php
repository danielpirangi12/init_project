<?php 
require_once("_globals.php");
        
    require_once("template/header.php");
?>
    <div class="backgroud-login">
        <section class="form-login-acess backgroud-image">
        <div class="row justify-content-md-center">
            <div class="col col-lg-3">
            <h2><img class="logo-lagsig" src="<?= $BASE_URL ?>/img/icons/logo-lagsig-top-login-500×500px.png" alt="LAGSIG"></h2>
            <form action="<?= $BASE_URL?>_auth_process.php" method="POST">
            <input type="hidden" name="type" value="login">
                <div class="mb-3">
                    <label for="email" class="form-label">Usuário</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha &nbsp;<a href="">Esqueceu sua senha?</a></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Manter-me conectado</label>
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            </div>
        </div>  
        </section>
    </div>
<?php 
    require_once("template/footer.php");
?>