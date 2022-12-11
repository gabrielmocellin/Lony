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
            <ul>
                <li id='titulo_login_li'><h1>Login</h1></li>
                <li class='input_login_li'><input name='usuario_input' type='email' placeholder='Usuário:' required></li>
                <li class='input_login_li'><input name='senha_input' type='password' placeholder='Senha:' required></li>
                <li id='button_login_li'><button>Logar</button></li>
            </ul>
        </form>
    </main>
    <footer>
        <p>Copyright © 2022 Gbonet. All Rights Reserved</p>
    </footer>
</body>
</html>