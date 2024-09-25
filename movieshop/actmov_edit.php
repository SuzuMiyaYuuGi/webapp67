<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting Acttomer Movie</title>
    <link rel="stylesheet"  href="style1.css">

</head>
<body>
<?php
        if(!isset($_GET['Act_ID'])){
            header("refresh: 0; url=act_mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actormovie WHERE Act_ID='$_GET[Act_ID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="actmov_editsuccess.php">
        <p>

            <label>Actor ID</label>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" hidden>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" />

        </p>

        <p>

            <label>Movie ID</label>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" />
        </p>

        <p>

            <label>ชื่อนักแสดง</label>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" hidden>
            <input type="text" name="Act_Name" id="Act_Name" value="<?=$row['Act_Name'];?>" />


        </p>

        <p>

            <label>นามสกุลนักแสดง</label>

            <input type="text" name="Act_LastName" id="Act_LastName" value="<?=$row['Act_LastName'];?>" />
        </p>

        <p>

            <label>ชื่อหนัง</label>

            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_Name" id="Movie_Name" value="<?=$row['Movie_Name'];?>" />
        </p>
        <input type="submit" value="บันทึก">
        <a href='actmov_mainmenu.php'><button type = "button">Back</button></a>
    </form>

</body>
</html>