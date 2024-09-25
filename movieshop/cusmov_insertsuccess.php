<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show Inserting Success</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'conn.php';

    // ตรวจสอบค่าว่างของแต่ละฟิลด์
    if (empty($_POST['Cus_ID']) || empty($_POST['Movie_ID']) || empty($_POST['Cus_Name']) || empty($_POST['Cus_LastName']) || empty($_POST['Movie_Name'])) {
        echo "<script>alert('Please fill all field'); window.location.href = 'cusmov_insert.php';</script>";
        exit();
    }

    // สร้างคำสั่ง SQL โดยใช้ prepared statement เพื่อป้องกัน SQL injection
    $stmt = $conn->prepare("INSERT INTO customermovie(Cus_ID, Movie_ID, Cus_Name, Cus_LastName, Movie_Name) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_POST['Cus_ID'], $_POST['Movie_ID'], $_POST['Cus_Name'], $_POST['Cus_LastName'], $_POST['Movie_Name']);

    if ($stmt->execute()) {
        echo "<script>alert('Insert Successful'); window.location.href = 'cusmov_mainmenu.php';</script>";
        header("refresh: 1; url=cusmov_mainmenu.php");
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
?>
</body>
</html>