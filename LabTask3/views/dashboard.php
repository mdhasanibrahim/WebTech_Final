<?php
    if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
    include 'header.php';
    require_once '../controllers/user_controller.php';
    require_once '../controllers/student_controller.php';
    require_once '../controllers/department_controller.php';
    $depts=getDepts();
    $students=getStudents();
?>
        <center>
        <h4>Students</h4>
        <table border="2">
            <tr>
                <td>Name</td>
                <td>DOB</td>
                <td>CREDIT</td>
                <td>CGPA</td>
            </tr>
            <?php
                foreach($students as $student){
                    echo "<tr>";
                    echo "<td>".$student["name"]."</td>";
                    echo "<td>".$student["dob"]."</td>";
                    echo "<td>".$student["credit"]."</td>";
                    echo "<td>".$student["cgpa"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <h4>Departments</h4>
        <table border="2">
            <tr>
                <td>Name</td>
            </tr>
            <?php
                foreach($depts as $dept){
                    echo "<tr>";
                    echo "<td>".$dept["name"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
<?php include 'footer.php';?>