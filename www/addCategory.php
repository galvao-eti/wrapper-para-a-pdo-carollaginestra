<?php
require "../autoload.php";

use Alfa\Wrapper;

$Category = new Wrapper();

if ($_GET) {
    $dados = $_GET;
    $Category->addCategory($dados['category']);
}
?>

<form action="addCategory.php" method="get">
    <label for="cat">Categoria:</label>
    <input type="text" name="cat">

    <button type="submit">Adicionar</button>
</form>