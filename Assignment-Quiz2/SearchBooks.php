<?php
    require_once 'controllers/BookController.php';
    $books=searchBooks($_GET["name"]);
    if(count($books)>0){
        foreach($books as $book){
            echo "<span><a href=\"BookDetails.php?id=".$book["id"].">".$book["name"]."</a></span><br>";
        }
    }
?>