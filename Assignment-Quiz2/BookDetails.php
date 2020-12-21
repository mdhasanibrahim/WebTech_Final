<?php
    require_once 'controllers/BookController.php';
    $book=getBook($_GET["id"]);
?>
<html>
    <center>
        <table>
            <tr>
                <td>Image:</td>
                <td><img src="<?php echo $book[0]["bookimage"];?>" width="50" height="50"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $book[0]["name"];?></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td><?php echo $book[0]["author"];?></td>
            </tr>
            <tr>
                <td>Edition:</td>
                <td><?php echo $book[0]["edition"];?></td>
            </tr>
        </table>
    </center>
</html>