<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login_proc.php" method="post">
        <input type="text" name="login" placeholder="Login">
        <br>
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <button type="submit">Login</button>
        <p>
            <a href="cadastro.php">Ainda não é cadastrado? Clique aqui</a>
        </p>
    </form>
</body>
</html>