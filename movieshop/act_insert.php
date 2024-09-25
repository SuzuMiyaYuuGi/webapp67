<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show Inserting data</title>
    <link rel="stylesheet"  href="style1.css">
</head>
<body>
<form method="post" action="act_insertsuccess.php">
        
        <p>

        <label>ID</label>
        <input type="text" name="Act_ID" id="Act_ID">

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="Act_Name" id="Act_Name">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="Act_LastName" id="Act_LastName">

        </p>

        <p>

            <label>จำนวนหนังที่แสดง</label>

            <input type="text" name="Act_Movie" id="Act_Movie">

        </p>

        <p>

            <label>อายุ</label>

            <input type="text" name="Act_Age" id="Act_Age">

        </p>
        <input type="submit" value="บันทึก">
        <a href='act_mainmenu.php'> <button type = "button"> Back </button></a>
    </form>
    

</body>
</html>