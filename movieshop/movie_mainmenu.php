<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this show Movie information webpage</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
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
                    <th>ชื่อหนัง</th>
                    <th>วันที่เผยแพร่</th>
                    <th>เรทติ้ง</th>
                    <th>ผู้กำกับ</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["Movie_ID"]."</td>"."<td>".$row["Movie_Name"]."</td>"."<td>";
                            echo date("d F Y", strtotime($row["Movie_ReleaseDates"])); // แสดงผลเป็นวันที่ เดือน ปี (เช่น 25 December 2023)
                            echo "</td>"."<td>".$row["Movie_Rating"]."</td>"."<td>".$row["Movie_Director"]."</td>"."<td>"."<a href='movie_edit.php?Movie_ID=".$row["Movie_ID"]."'><button> Edit </button></a>"."</td>"."<td>"."<a href='movie_delete.php?Movie_ID=".$row["Movie_ID"]."'><button> Delete </button></a>"."</td>";
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
        <a href='movie_insert.php'><button> Insert Actor</button></a>
        <br>
        <br>
        <a href='mainmenu.php'><button>Home</button></a>
</body>
</html>