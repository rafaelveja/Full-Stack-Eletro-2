<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nossas Lojas</title>
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
                include('menu.html')
            ?>

            <header>
                <h2>Nossas Lojas</h2><hr>
            </header>

            <div style="text-align: center;">

                <div class="lojas">
                    <h3 class="descrição">Rio de Janeiro</h3>
                    <p class="descrição">Avenida Paulista, 985</p>
                    <p class="descrição">10º andar</p>
                    <p class="descrição">Centro</p>
                    <p class="descrição">(21) 3333-3333</p>
                </div>

                <div class="lojas" style="margin-left: 50px; margin-right: 50px;">
                    <h3 class="descrição">São Paulo</h3>
                    <p class="descrição">Avenida Presidente Vargas, 5000</p>
                    <p class="descrição">3º andar</p>
                    <p class="descrição">Jardins</p>
                    <p class="descrição">(11) 44444-4444</p>
                </div>

                <div class="lojas">
                    <h3 class="descrição">Santa Catarina</h3>
                    <p class="descrição">Rua Major Ávila, 370</p>
                    <p class="descrição">Vila Mariana</p>
                    <p class="descrição">(47) 5555-5555</p>
                    <br>
            </div>

            </div>  
        </div>     
        <br><br><br>    
        <footer id="rodapé">
            <p id="formas_pagamento"><b>Formas de pagamento</b></p>
            <img src="./imagens/forma de pagamento.png">
            <p>&copy; Recode Pro</p>
        </footer>
      
    </body>
</html>