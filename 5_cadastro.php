


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Informe o nome e a senha que deseja cadastrar</h2>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $arquivo = fopen('usuarios.txt', 'a');

        $linha = $nome . ';' .$senha . '\n';

        fwrite($arquivo, $linha);

        fclose($arquivo);

        echo "<p>Usuário cadastrado com sucesso</p>";
    }
    
    ?>
</body>
</html>