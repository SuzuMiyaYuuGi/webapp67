<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting Actor</title>
    <link rel="stylesheet"  href="style1.css">

</head>
<body>
<?php
        if(!isset($_GET['Act_ID'])){
            header("refresh: 0; url=act_mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actor WHERE Act_ID='$_GET[Act_ID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="act_editsuccess.php">
        <p>

            <label>ID</label>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" hidden>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" />

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="Act_ID" id="Act_ID" value="<?=$row['Act_ID'];?>" hidden>
            <input type="text" name="Act_Name" id="Act_Name" value="<?=$row['Act_Name'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="Act_LastName" id="Act_LastName" value="<?=$row['Act_LastName'];?>" />

        </p>

        <p>

            <label>จำนวนหนังที่แสดง</label>

            <input type="text" name="Act_Movie" id="Act_Movie" value="<?=$row['Act_Movie'];?>" />

        </p>

        <p>

            <label>อายุ</label>

            <input type="text" name="Act_Age" id="Act_Age" value="<?=$row['Act_Age'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='act_mainmenu.php'><button type = "button">Back</button></a>
    </form>

</body>
</html>