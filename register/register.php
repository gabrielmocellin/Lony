<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lony | Registro</title>
    <link rel="stylesheet" href="register.css">
    <link rel="shortcut icon" href="img/Lony.png" type="image/x-icon">
</head>
<body>
    <main>
        <form method='POST' action='exe/register_exe.php'>
            <ul>
                <li id='titulo_registro_li'><h1>Registro</h1></li>
                <li><input name='apelido_input' type='text' placeholder='Apelido:' required></li>
                <li><input name='email_input' type='email' placeholder='Email:' required></li>
                <li><input name='senha_input' type='password' placeholder='Senha:' required></li>
                <li><input name='confirmar_senha_input' type='password' placeholder='Confirmar:' required></li>
                <li><input name='nascimento_input' type='date' placeholder='Nascimento:' required></li>
                <li id='button_registro_li'><button>Registrar</button></li>
            </ul>
        </form>
    </main>
    <footer>
        <p>Copyright © 2022 Gbonet. All Rights Reserved</p>
    </footer>
</body>
</html>