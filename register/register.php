<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lony</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <main>
        <form method='POST' action='exe/register_exe.php'>
            <ul>
                <li id='titulo_registro_li'><h1>Registro</h1></li>
                <li>Apelido:<input name='apelido_input' type='text' required></li>
                <li>Email:<input name='email_input' type='email' required></li>
                <li>Senha:<input name='senha_input' type='password' required></li>
                <li>Confirmar:<input name='confirmar_senha_input' type='password' required></li>
                <li>Nascimento:<input name='nascimento_input' type='date' required></li>
                <li id='button_registro_li'><button>Registrar</button></li>
            </ul>
        </form>
    </main>
    <footer>
        <p>Copyright © 2022 Gbonet. All Rights Reserved</p>
    </footer>
</body>
</html>