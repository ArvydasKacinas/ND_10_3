<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Uzduotis</title>
</head>
<body>
    <form method="POST" action="3_uzduotis.php">
        <div>
            <p>Prisijungimo Vardas</p>
            <input name="vardas"/>
        </div>
        <div>
            <p>Slaptazodis</p>
            <input name="slaptazodis"/>
        </div>    
        <button name="login" type="submit">Prisijungti</button>
    </form>

    <div>
        <?php

        $vardas="admin";
        $slaptazodis="123456";

        if(isset($_POST["login"])) {
            if($vardas==$_POST["vardas"] && $slaptazodis==$_POST["slaptazodis"]) {
                echo "<div>prisijungete sekmingai</div>";
            } else if ($vardas!=$_POST["vardas"] || $slaptazodis!=$_POST["slaptazodis"]) {
                echo "ivesti duomenys neteisingi";
            }
        }
        ?>
    </div>
</body>
</html>