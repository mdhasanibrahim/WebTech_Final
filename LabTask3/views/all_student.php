<?php
    if(!isset($_COOKIE["username"])){
        header("Location: login.php");
    }
    include 'header.php';
    require_once '../controllers/student_controller.php';
    $students=getStudents();
?>
<center>
        <h4>Students</h4>
        <table border="2">
            <tr>
                <td>NAME</td>
                <td>DOB</td>
                <td>CREDIT</td>
                <td>CGPA</td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
            <?php
                foreach($students as $student){
                    echo "<tr>";
                    echo "<td>".$student["name"]."</td>";
                    echo "<td>".$student["dob"]."</td>";
                    echo "<td>".$student["credit"]."</td>";
                    echo "<td>".$student["cgpa"]."</td>";
                    echo "<td><a href=\"edit_student.php?id=".$student["id"]."\">Edit</a></td>";
                    echo "<td><a href=\"delete_student.php?id=".$student["id"]."\"target=\"_blank\">Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
</center>
<?php include 'footer.php';?>