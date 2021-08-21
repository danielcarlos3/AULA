<?php
 require_once('./config/conexaodb.php');
?>

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
    <link rel="icon" type="imagem/png" href="./public/imagens/cadeado.png" />
    <title>Login</title>
   
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>acesso restrito</b></a>
            </div>
            <div class="card-body">
                <div class="callout callout-warning">
                    <h5>Atenção!</h5>

                    <p>Todos os campo sinalizados com ** são obrigatorios.</p>
                </div>

                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Digite seu Celular ou E-mail *">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control" placeholder="Digite sua senha *">
                        <input type="button" id="showPassword" value="Show" class="fas fa-lock" />
                    </div>
                    
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Logar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form> 
                <p class="mb-2">
                    <a href="register.html" class="text-center">Registra-se</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="templete/AdminLTE-3.1.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="templete/AdminLTE-3.1.0/plugins/jquery/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="templete/AdminLTE-3.1.0/plugins/jquery/adminlte.min.js"></script>
    <!-- javascript local -->
    <script src="./public/js/main.js"></script>
</body>

</html>