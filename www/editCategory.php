<?php
require "../autoload.php";

use Alfa\Wrapper;

$Category = new Wrapper();

if (isset($_GET['edit'])) {
		$value = $Category->searchCategory($_GET['edit']);
} else {
    $Category->editCategory($_GET['id'], $_GET['category']);
    header("location:index.php");
}
?>

<form action="editCategory.php" method="GET">
    <input type="hidden" name="id" value="<?php echo $value[0]['id']; ?>">
    <label for="category">Nome da categoria:</label>
    <br>
    <input type="text" name="category" value="<?php echo $value[0]['nome']; ?>">

    <div style="margin-top: 15px">
        <button type="submit" style="background: blue; color: white; padding: 10px 20px; text-decoration: none;
            border: 0; font-size: 16px">Alterar</button>
        <a href="index.php" style="background: blue; color: white; padding: 12px 20px; text-decoration: none;
            font-size: 16px;">Voltar</a>
    </div>
</form>
