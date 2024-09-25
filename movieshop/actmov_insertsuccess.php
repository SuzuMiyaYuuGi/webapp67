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
    if (empty($_POST['Act_ID']) || empty($_POST['Movie_ID']) || empty($_POST['Act_Name']) || empty($_POST['Act_LastName']) || empty($_POST['Movie_Name'])) {
        echo "<script>alert('Please fill all field'); window.location.href = 'actmov_insert.php';</script>";
        exit();
    }

    // สร้างคำสั่ง SQL โดยใช้ prepared statement เพื่อป้องกัน SQL injection
    $stmt = $conn->prepare("INSERT INTO actormovie(Act_ID, Movie_ID, Act_Name, Act_LastName, Movie_Name) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_POST['Act_ID'], $_POST['Movie_ID'], $_POST['Act_Name'], $_POST['Act_LastName'], $_POST['Movie_Name']);

    if ($stmt->execute()) {
        echo "<script>alert('Insert Successful'); window.location.href = 'actmov_mainmenu.php';</script>";
        header("refresh: 1; url=actmov_mainmenu.php");
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
?>
</body>
</html>