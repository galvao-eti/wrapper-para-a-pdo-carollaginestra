<?php
require "../autoload.php";

use Alfa\Wrapper;

$Category = new Wrapper();

if ($_GET) {
    $Category->addCategory($_GET['category']);
}
?>

<form action="addCategory.php" method="get">
    <label for="category">Nome da categoria:</label>
    <br>
    <input type="text" name="category" required>

    <div style="margin-top: 15px">
        <button type="submit" style="background: blue; color: white; padding: 10px 20px; text-decoration: none;
            border: 0; font-size: 16px">Adicionar</button>
        <a href="index.php" style="background: blue; color: white; padding: 12px 20px; text-decoration: none;
            font-size: 16px;">Voltar</a>
    </div>
    
</form>