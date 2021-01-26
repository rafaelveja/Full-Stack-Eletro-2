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
if(isset($_POST['nome']) && isset($_POST['msg'])){
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    $data = "now()";

    $sql = "insert into comentarios (nome, msg, data) values ( '$nome', '$msg', $data ) ";
    $result = $conn->query($sql);

    if($result){
        //echo "inserido com sucesso";
        echo  "<script>alert('Mensagem enviada com sucesso');</script>";
        }
    else{
        echo  "<script>alert('Mensagem não enviada, por favor tente novamente');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    </head>
    <body>
    
        <div class="container-fluid">

            <!-- menu -->

            <?php
                include_once('menu.html')
            ?>

            <header>
                <h2>Fale Conosco</h2><hr>
            </header> 

            <main>
       

                <div>

                    <p style="text-align: center"><img src="./imagens/email.jpg" width="25px">contato@fullstackeletro.com</p>
                    <p style="text-align: center"><img src="./imagens/wzap.png" width="25px">(11) 99999-9999</p>


                </div>              


                <div class="jumbotron"   id="contato">

                    <form method="post" action="">  

                        Nome:
                        
                        <input type="text" class="form-control" name="nome" placeholder="">

                        <br>

                        Mensagem:
                        
                        <textarea class="form-control" name="msg" rows="10"></textarea>

                        <br>

                        <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
                                                         
                    </form>

                </div>

            </main>    

            <footer id="rodapé">
                <p>&copy; Recode Pro</p>
            </footer>
        </div>  

    </body>
</html>