<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this show Actor information webpage</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?> 

<h1>Actor Information</h1><br> 
        <table class="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>จำนวนหนังที่แสดง</th>
                    <th>อายุ</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["Act_ID"]."</td>"."<td>".$row["Act_Name"]." ".$row["Act_LastName"]."</td>"."<td>".$row["Act_Movie"]."</td>"."<td>".$row["Act_Age"]."</td>"."<td>"."<a href='act_edit.php?Act_ID=".$row["Act_ID"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='act_delete.php?Act_ID=".$row["Act_ID"]."'><button> Delete </button></a>"."</td>";
                            echo "</tr>";
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
        <a href='act_insert.php'><button> Insert Actor</button></a>
        <br>
        <br>
        <a href='mainmenu.php'><button>Home</button></a>
</body>
</html>