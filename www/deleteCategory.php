<?php
require "../autoload.php";

use Alfa\Wrapper;

    $wrapper = new Wrapper();


    if (isset($_GET['delete'])) {
        $wrapper->deleteCategory($_GET['delete']);
    }
