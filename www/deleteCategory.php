<?php
require "../autoload.php";

use Alfa\Wrapper;

    $wrapper = new Wrapper();


    if (isset($_GET['delete'])) {
        $wrapper->deleteCategory($_GET['delete']);
    }
?>

<span style="font-weight: bold; color: red; font-size: 18px; font-family: Arial"> 
    Categoria deletada!
</span>

<div style="margin-top: 15px">
    <a href="index.php" style="background: blue; color: white; padding: 12px 20px; text-decoration: none;
        font-size: 16px;">Voltar</a>
</div>