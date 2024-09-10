<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    
    $araycombine = array_merge($bil1, $bil2);

    
    $uniquearay = array_unique($araycombine);

    rsort($uniquearay);

    
    $result = implode(', ', $uniquearay);

   
    echo "Hasil: " . $result;
    ?>
</body>
</html>
