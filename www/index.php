<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="../favicon.ico"/>
        <meta name="author" content="Carolina Laginestra"/>
        <title>Wrapper PHP</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
            }

            a {
                background: blue;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
            }

            .margin-top {
                margin-top: 15px;
            }

            .container{
                margin:0 auto;
                max-width:1170px;
                width:90%
            }

            @media only screen and (min-width: 601px) {
                .container{width:97%}
            }

            @media only screen and (max-width: 600px){
                .container{width:93%}
            }

            table {
                border: 1px solid #333;
                padding: 15px;
                width: 100%;
            }

            td {
                padding: 15px 0;
            }
        </style>
    </head>

    <body>

        <div class="container">

            <div class="margin-top">
                <a href="addCategory.php">Nova Categoria <i class="fas fa-plus"></i></a>
            </div>
        
            <br><br>
            <table>
                <tr>
                    <th style="width: 32%">ID</th>
                    <th style="width: 32%">Categoria</th>
                    <th style="width: 32%">Ações</th>
                </tr>
                <?php
                    require '../autoload.php';

                    use Alfa\Wrapper;

                    $wrapper = new Wrapper();

                    $category = $wrapper->listCategory();

                    foreach ($category as $c) { ?>
                    
                    <tr>
                        <td><?php echo $c['id'] ?></td>
                        <td><?php echo $c['nome'] ?></td>
                        <td><a href="editCategory.php?edit=<?php echo $c['id'] ?>">Editar</a></td>
                        <td><a href="deleteCategory.php?delete=<?php echo $c['id'] ?>">Deletar</a></td>
                    </tr>
                <?php }?>
            </table>
        </div>

    </body> 
</html>
