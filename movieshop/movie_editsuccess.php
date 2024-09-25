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
$sql_update="UPDATE movie SET Movie_Name='$_POST[Movie_Name]',Movie_ReleaseDates='$_POST[Movie_ReleaseDates]' ,Movie_Rating='$_POST[Movie_Rating]' ,Movie_Director='$_POST[Movie_Director]' WHERE Movie_ID='$_POST[Movie_ID]' ";
            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                echo "<script>alert('Edit Successful'); window.location.href = 'movie_mainmenu.php';</script>";
                header("refresh: 1; url=movie_mainmenu.php");
            }

        ?>

</body>
</html>