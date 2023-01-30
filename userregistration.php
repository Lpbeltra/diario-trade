<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'style.php'; include 'functions.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3a5db8322b.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='style.css'/>
    <title>Login area</title>
</head>

<body id="body">
    <div class="container" style="width: 650px; margin-top: 150px; border: 2px solid #f3f3f3; border-radius: 15px; -webkit-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); -moz-box-shadow: 10px 10px 9px 0px rgba(199,189,199,1); box-shadow: 10px 10px 9px 0px rgba(199,189,199,1);">
        <div style="padding: 10px">
            <form class="row g-3 needs-validation"  action="insertuser.php" method="post">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nomeusuario" required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="mail" required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Login de usuário</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="userlogin" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Senha</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-key"></i></span>
                        <input type="password" class="form-control" name="passwd1" id="passwd1" required>
                        <div class="invalid-feedback">
                            Isira uma senha
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Repita a senha</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-key"></i></span>
                        <input type="password" class="form-control" name="passwd2" id="passwd2" oninput="validatePassword(this)" required>
                        <div class="invalid-feedback">
                            As senhas diferem!
                        </div>
                    </div>
                </div>
                <div style="text-align:center; width: 650px;">
                    <button type="submit" style="width: 130px" onclick="verifySubmit()" class="btn btn-sm btn-success">Registrar!</button>
                    <a type="button" href="index.php" style="margin-left:px;width: 130px" class="btn btn-sm btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript" src="functions.js"></script>
</body>

</html>