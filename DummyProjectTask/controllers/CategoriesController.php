<?php
    require_once '../models/db_connection.php';
?>

<?php
    $name="";
    $err_name="";
    $hasError=false;
    if(isset($_POST["add_cat_button"])){
        if(empty($_POST["name"])){
            $err_name="Category Name Required";
            $hasError=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(!$hasError){
            addCategory();
            echo "Added Successfully!";
        }
    }
    if(isset($_POST["edit_cat_button"])){
        if(empty($_POST["name"])){
            $err_name="Category Name Required";
            $hasError=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(!$hasError){
            updateCategory($_GET["category_id"]);
            echo "Updated Successfully!";
        }
    }

  
    function addCategory(){
        global $name;
        $query="INSERT INTO categories(NAME) VALUES('$name')";
        execute($query);
    }
    function updateCategory($category_id){
        global $name;
        $query="UPDATE categories SET NAME='$name' WHERE ID=".$category_id;
         execute($query);
    }
    function getAllCategory(){
        $query="SELECT * FROM categories";
        return get($query);
    }
    function getCategoryName($category_id){
        $query="SELECT NAME FROM categories WHERE ID=".$category_id;
        $result=get($query);
        return $result[0]["NAME"];
    }
    function deleteCategory($category_id){
        $query="DELETE FROM categories WHERE ID=".$category_id;
         execute($query);
    }
?>