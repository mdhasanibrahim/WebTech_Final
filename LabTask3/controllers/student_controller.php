<?php
    require_once '../models/db_connection.php';
?>
<?php
    if(isset($_POST["add"])){
        $name=htmlspecialchars($_POST["name"]);
        $dob=$_POST["dob"];
        $credit=$_POST["credit"];
        $cgpa=$_POST["cgpa"];
        $dept_id=$_POST["dept"];
        addStudent($name,$dob,$credit,$cgpa,$dept_id);
    }
    
    if(isset($_POST["edit"])){
        $name=htmlspecialchars($_POST["name"]);
        $dob=$_POST["dob"];
        $credit=$_POST["credit"];
        $cgpa=$_POST["cgpa"];
        $dept_id=$_POST["dept"];
        editStudent($name,$dob,$credit,$cgpa,$dept_id,$_GET["id"]);
    }

    function addStudent($name,$dob,$credit,$cgpa,$dept_id){
        $query="INSERT INTO students(NAME,DOB,CREDIT,CGPA,DEPT_ID) VALUES ('$name','$dob','$credit','$cgpa',$dept_id)";
        execute($query);
    }
    function getStudents(){
        $query="SELECT * FROM students";
        return get($query);
    }
    function getStudent($id){
        $query="SELECT * FROM students WHERE ID=".$id;
        return get($query);
    }
    function editStudent($name,$dob,$credit,$cgpa,$dept_id,$id){
        $query="UPDATE students SET NAME='$name',DOB='$dob',CREDIT='$credit',CGPA='$cgpa' WHERE ID=".$id;
        execute($query);
    }
    function deleteStudent($id){
        $query="DELETE FROM students WHERE ID=".$id;
        execute($query);
    }
?>