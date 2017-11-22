<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>$ Conta</title>
        <link rel="shortcut icon" href="css/conta.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        <h3>Conta da mesa</h3>
        <div>
            <?php
            include './itemView.php';
            ?>
        </div>
        <h3>Conta por pessoa</h3>
        <div>
            <?php
            include './contaView.php';
            ?>
        </div>
    </body>
</html>
