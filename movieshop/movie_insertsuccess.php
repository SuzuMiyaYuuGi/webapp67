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
    if (empty($_POST['Movie_ID']) || empty($_POST['Movie_Name']) || empty($_POST['Movie_ReleaseDates']) || empty($_POST['Movie_Rating']) || empty($_POST['Movie_Director'])) {
        echo "<script>alert('Please fill all field'); window.location.href = 'act_insert.php';</script>";
        exit();
    }

    // สร้างคำสั่ง SQL โดยใช้ prepared statement เพื่อป้องกัน SQL injection
    $stmt = $conn->prepare("INSERT INTO movie(Movie_ID, Movie_Name, Movie_ReleaseDates, Movie_Rating, Movie_Director) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_POST['Movie_ID'], $_POST['Movie_Name'], $_POST['Movie_ReleaseDates'], $_POST['Movie_Rating'], $_POST['Movie_Director']);

    if ($stmt->execute()) {
        echo "<script>alert('Insert Successful'); window.location.href = 'movie_mainmenu';</script>";
        header("refresh: 1; url=movie_mainmenu.php");
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
?>
</body>
</html>