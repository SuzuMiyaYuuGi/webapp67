<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show Inserting data</title>
    <link rel="stylesheet"  href="style1.css">
</head>
<body>
<form method="post" action="movie_insertsuccess.php">
        
        <p>

        <label>ID</label>
        <input type="text" name="Movie_ID" id="Movie_ID">

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="Movie_Name" id="Movie_Name">

        </p>

        <p>

            <label>วันที่เผยแพร่</label>

            <input type="date" name="Movie_ReleaseDates" id="Movie_ReleaseDates">

        </p>

        <p>

            <label>เรทติ้ง</label>

            <input type="text" name="Movie_Rating" id="Movie_Rating">

        </p>

        <p>

            <label>ผู้กำกับ</label>

            <input type="text" name="Movie_Director" id="Movie_Director">

        </p>
        <input type="submit" value="บันทึก">
        <a href='movie_mainmenu.php'> <button type = "button"> Back </button></a>
    </form>

</body>
</html>