<?php
require "../autoload.php";

use Alfa\Wrapper;

$Category = new Wrapper();

if ($_GET) {
    $Category->addCategory($_GET['category']);
}
?>

<form action="addCategory.php" method="get">
    <label for="category">Categoria:</label>
    <input type="text" name="category">

    <button type="submit">Adicionar</button>
</form>