<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>

    <style>
        #containerCadastro{
            margin-top: 80px;
        }
    </style>
    
</head>
<body>
    <div class="container" id="containerCadastro">
        <h4>Formulário de Cadastro</h4>
        <form action="_cadastro_de_usuario.php" method="post" class="row g-4">
            <div class="col-md-4">
                <label for="inputEmail" class="form-label">E-mail</label>
                <input name="email1" type="email" class="form-control" id="email">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="password">
            </div>
            <div class="col-md-4">
                <label for="inputNumberID" class="form-label">Identificação</label>
                <input name="numberid" type="number" class="form-control" id="number">
            </div>
            <div class="col-6">
                <label for="inputName" class="form-label">Nome</label>
                <input name="name1" type="text" class="form-control" id="name">
            </div>
            <div class="col-6">
                <label for="inputName2" class="form-label">Sobrenome</label>
                <input name="name2" type="text" class="form-control" id="name2">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input name="city" type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputType" class="form-label">Tipo</label>
                <select name="type2" id="inputType" class="form-select">
                <option></option>
                <option>Aluno</option>
                <option>Monitor</option>
                <option>Professor</option>
                <option>Visitante</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputType" class="form-label">Turma</label>
                <select name="classt" id="inputType" class="form-select">
                <option></option>
                <option>EAD</option>
                <option>ESA</option>
                <option>GEO-Manhã</option>
                <option>Geo-Noite</option>
                <option>Visitante</option>
                </select>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input name="confirm" class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Enviar confirmação de cadastro por e-mail</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>