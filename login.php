<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div style="display:grid; justify-items:center; margin-top:4vw;">
            <h1>Faça seu login</h1>
            <hr/>
            <form method="post" action="<?php echo URL_BASE?>autenticar.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Digite seu email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Digite sua senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <input type="submit"  name="submit" class="btn btn-primary"/>
        </form>
    </div>
    
</body>
</html>