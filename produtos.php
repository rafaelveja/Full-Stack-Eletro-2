<!-- conexao database -->
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

//criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// verificando a conexão:
if (!$conn) {
    die ("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
}

//inserindo os dados na tabela (codigo sql no php)
if(isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['produto']) && isset($_POST['quantidade']) ){
    $cliente = $_POST['cliente'];
    $endereco = $_POST['endereco'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];


    $sql = "insert into pedido (cliente, endereco, produto, quantidade) values ( '$cliente', '$endereco', '$produto', '$quantidade'  ) ";
    $result = $conn->query($sql);

    if($result){
        echo  "<script>alert('Pedido enviado com sucesso');</script>";
    }
    else{
        echo  "<script>alert('houve um erro ao solicitar seu pedido. Por favor refaça seu pedido');</script>";
        
    }

   
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="./js/funcoes.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>

        <!-- menu -->
        <?php
            include_once('menu.html')
        ?>

        <header>
            <h2>Produtos</h2><hr>
        </header>

        <div class="produtos">

            <div class="categorias">
                <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                        <li onclick="exibir_categoria('fogao')">Fogões (2)</li> 
                        <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                        <li onclick="exibir_categoria('lavaroupas')">Lava roupas (2)</li>
                        <li onclick="exibir_categoria('lavalouca')">Lava louças(2)</li>
                    </ul>        
            </div>

            <div>

                <?php

                    $sql = "select * from produto";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($rows = $result->fetch_assoc()){
                ?>

                <div class="box_produto" id=<?php echo $rows["categoria"]; ?>>
                    <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)" >
                    <br>
                    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                    <hr>
                    <p class="descrição"><strike><?php echo $rows["preco"]; ?></strike></p>
                    <p class="preço"><?php echo $rows["precofinal"]; ?></p>
                    <br>
                </div>

                <?php
                
                        }
                    } else {
                    echo "nenhum produto cadastrado!";
                    }
                ?>

            </div>
        
        </div>

        <div class="jumbotron">
        
            <form method="post" action="">  

                <p>Preencha o formulário abaixo para fazer o seu pedido</p>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="cliente" placeholder="Cliente">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="endereco" placeholder="Endereco">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="produto" placeholder="Produto">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
         
            </form>
        
            <br>

        </div>    

        <footer id="rodapé">
            <p id="formas_pagamento"><b>Formas de pagamento</b></p>
            <img src="./imagens/forma de pagamento.png">
            <p>&copy; Recode Pro</p>
            </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
    </body>
</html>