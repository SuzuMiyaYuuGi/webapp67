<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this show member information webpage</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?> 

<h1>Member Information</h1><br> 
        <table class="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["Cus_ID"]."</td>"."<td>".$row["Cus_Name"]." ".$row["Cus_LastName"]."</td>"."<td>".$row["Cus_Address"]."</td>"."<td>".$row["Cus_PhoneCall"]."</td>"."<td>"."<a href='cus_edit.php?Cus_ID=".$row["Cus_ID"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='cus_delete.php?Cus_ID=".$row["Cus_ID"]."'><button> Delete </button></a>"."</td>";
                            echo "</tr>";
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <a href='cus_insert.php'><button> New Member</button></a>
        <br>
        <br>
        <a href='mainmenu.php'><button>Home</button></a>
</body>
</html>