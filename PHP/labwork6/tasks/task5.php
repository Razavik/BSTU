<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [
        "Apple" => 1.2,
        "Banana" => 0.8,
        "Orange" => 1.5,
        "Mango" => 2.0,
        "Grapes" => 2.5
    ];

    $productNames = array_keys($products);
    echo print_r($productNames) . "<br>";

    $productPrices = array_values($products);
    echo print_r($productPrices) . "<br>";


    echo "Самый дорогой продукт стоит: " . max($productPrices) . "<br>";

    foreach ($products as $product => $price) {
        echo "$product: $price<br>";
    }
    ?>

</body>

</html>