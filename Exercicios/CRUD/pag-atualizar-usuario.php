<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Atualizar</title>
    </head>
    <body>
        <?php
            $linha = file("bd/usuario")[$_GET['id']];
            $arrUsuario = explode(',', $linha);
            $nome = $arrUsuario[0];
            $email = $arrUsuario[1];
            $senha = $arrUsuario[2];
        ?>
        <section>
            <h2>Atualizar</h2>
            <form action="bd/atualizar-usuario.php?id=<?=$_GET['id']?>" method="post">
                <div>
                    <label for="txtNome">Nome</label><br>
                    <input type="text" id="txtNome" name="nome" placeholder="Nome" value=<?=$nome?>> 
                </div>
                <div>
                    <label for="txtEmail">E-mail</label><br>
                    <input type="email" id="txtEmail" name="email" placeholder="E-mail" value=<?=$email?>> 
                </div>
                <div>
                    <label for="txtSenha">Senha</label><br>
                    <input type="password" id="txtSenha" name="senha" placeholder="Senha" value=<?=$senha?>>
                </div>
                <div>
                    <input type="submit" value="Salvar">  
                    <input type="reset" value="Resetar">
                </div>            
            </form>
        </section>
    </body>
</html>


