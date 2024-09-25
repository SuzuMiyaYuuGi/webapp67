<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting Movie</title>
    <link rel="stylesheet"  href="style1.css">

</head>
<body>
<?php
        if(!isset($_GET['Movie_ID'])){
            header("refresh: 0; url=movie_mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE Movie_ID='$_GET[Movie_ID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="movie_editsuccess.php">
        <p>

            <label>ID</label>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" />

        </p>

        <p>

            <label>ชื่อหนัง</label>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_Name" id="Movie_Name" value="<?=$row['Movie_Name'];?>" />

        </p>

        <p>

            <label>วันที่เผยแพร่</label>

            <input type="date" name="Movie_ReleaseDates" id="Movie_ReleaseDates" value="<?=$row['Movie_ReleaseDates'];?>" />

        </p>

        <p>

            <label>เรทติ้ง</label>

            <input type="text" name="Movie_Rating" id="Movie_Rating" value="<?=$row['Movie_Rating'];?>" />

        </p>

        <p>

            <label>ผู้กำกับ</label>

            <input type="text" name="Movie_Director" id="Movie_Director" value="<?=$row['Movie_Director'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='movie_mainmenu.php'><button type = "button">Back</button></a>
    </form>

</body>
</html>