<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>CRUD</title>
    </head>
    <body>
        <h1>CRUD com Arquivos PHP</h1>
        <main>
            <section>
                <h2>Cadastro</h2>
                <form action="bd/salvar-usuario.php" method="post">
                    <div>
                        <label for="txtNome">Nome</label><br>
                        <input type="text" id="txtNome" name="nome" placeholder="Nome">
                    </div>
                    <div>
                        <label for="txtEmail">E-mail</label><br>
                        <input type="email" id="txtEmail" name="email" placeholder="E-mail">
                    </div>
                    <div>
                        <label for="txtSenha">Senha</label><br>
                        <input type="password" id="txtSenha" name="senha" placeholder="Senha">
                    </div>
                    <div>
                        <input type="submit" value="Salvar">  
                        <input type="reset" value="Limpar Campos">
                    </div>            
                </form>
            </section>
            <section>
                <h2>Itens</h2>
                <ol>
                    <?php
                    include_once 'bd/listar-usuario.php';
                    $usuarios = getUsuarios();
                    foreach ($usuarios as $index => $usuario){
                        ?>
                        <li>
                            <?= $usuario ?>
                            <a href="bd/deletar-usuario.php?id=<?= $index; ?>">
                                Deletar
                            </a>
                            <a href="pag-atualizar-usuario.php?id=<?= $index; ?>">
                                Atualizar
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ol>
            </section>
        </main>
        <footer>
            <p>Elaborado por Paulo Vitor</p>
            <p>Todos os direitos concedidos</p>
        </footer>
    </body>
</html>