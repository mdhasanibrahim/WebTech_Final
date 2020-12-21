<?php
    require_once '../database/dbconnection.php';
?>
<?php
    function searchBooks($name){
        $query="SELECT * FROM books WHERE name LIKE '%$name%'";
        return doQuery($query);
    }
    function getBook($id){
        $query="SELECT * FROM books WHERE id=".$id;
        return doQuery($query);
    }
?>