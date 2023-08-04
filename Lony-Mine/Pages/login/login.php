<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lony | Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="img/Lony.png" type="image/x-icon">
</head>
<body>
    <main>
        <form method='POST' action='exe/login_exe.php'>
            <h1>Login</h1>
            <input name='usuario_input' type='email' placeholder='Usuário:' required>
            <input name='senha_input' type='password' placeholder='Senha:' required>
            <div class="links">
                <a href='register.php'>Criar Conta</a>
                <a href='forgot.php'>Esqueci a Senha</a>
            </div>
        </form>
    </main>
</body>
</html>