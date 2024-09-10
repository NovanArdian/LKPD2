<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>*</title>
</head>
<body>
    <?php
    for ($b = 0; $b < 2; $b++) { //lipatan//
        for ($i = 0; $i < 4; $i++){ //4 shap/baris
            for ($j = 0; $j < 8; $j++){ //bintang perbaris
                echo "*";
            }
            echo "<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>