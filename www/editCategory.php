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
    <label for="category">Categoria:</label>
    <input type="text" name="category" value="<?php echo $value[0]['nome']; ?>">

    <button type="submit">Salvar</button>
</form>
