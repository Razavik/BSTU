<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $months = [
        "January", "February", "March", 
        "April", "May", "June", 
        "July", "August", "September", 
        "October", "November", "December"
    ];

    $chunks = array_chunk($months, 3);

    foreach ($chunks as $item) {
        echo print_r($item, true) . "<br>";
    }

    echo "Количество частей: " . count($chunks) . "<br>";
    ?>
</body>

</html>