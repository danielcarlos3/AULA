<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="templete/AdminLTE-3.1.0/dist/css/adminlte.min.css">
    <!-- estilo local -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- meu icone -->
    <link rel="icon" type="imagem/png" href="<?=URL_BASE;?>/public/imagens/cadeado.png" />
    <title>Cadastro</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="card card-primary">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</body>
</html>
