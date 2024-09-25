<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting data</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
        <?php
            require 'conn.php';
            $sql_update="UPDATE actor SET Act_Name='$_POST[Act_Name]',Act_LastName='$_POST[Act_LastName]' ,Act_Movie='$_POST[Act_Movie]' ,Act_Age='$_POST[Act_Age]' WHERE Act_ID='$_POST[Act_ID]' ";
            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                echo "<script>alert('Edit Successful'); window.location.href = 'act_mainmenu.php';</script>";
                header("refresh: 1; url=act_mainmenu.php");
            }

        ?>

</body>
</html>