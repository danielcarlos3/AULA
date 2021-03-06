<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- estilo local -->
    <link rel="stylesheet" href="../public/css/style.css">
    <title>CADASTRO</title>
</head>

<body class="pgcadastro">
    <!------ Include the above in your HEAD tag ---------->
    <div class="pgcentro">
        <form class="form-horizontal pgcadastro " action="<?=URL_BASE;?>" method="post">
            <fieldset>
                <div class="panel-body pgcadastro ">
                    <div class="form-group">
                        <div class="col-md-5 control-label">
                            <p class="help-block">
                                <h11>*</h11> Campo Obrigatório </p>
                        </div>
                    </div>

                    <!-- Text input nome-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
                        <div class="col-md-5">
                            <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <!-- Text input email-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>
                        <div class="col-md-2">
                            <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputEstado">motivo</label>
                            <select class="custom-select custom-select-lg mb-3 ">
                                <option value="1" selected>Esqueci a senha</option>
                                <option value="2">Trocar a senha </option>
                                <option value="3">Outros</option>
                            </select>
                        </div>

                    </div><br><br>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">NOVA SENHA <h11>*</h11></label>
                        <div class="col-md-2">
                            <input id="senha" name="senha" placeholder="senha" class="form-control input-md" required="" type="password">
                            <small id="passwordHelpInline" class="text-muted">
      Deve ter entre 8 e 20 caracteres.
    </small>
                        </div>

                        <label class="col-md-1 control-label" for="prependedtext">NOVA SENHA<h11>*</h11></label>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input id="senha" name="senha" placeholder="senha" class="form-control input-md" required="" type="password">
                            </div>
                        </div>

                    </div>

                    <div class="btncentro">
                        <button type="submit" class="btn btn-primary btn-lg ">Success</button>
                    </div>

            </fieldset>
        </form>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>