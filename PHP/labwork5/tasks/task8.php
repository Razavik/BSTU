<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $quote = "эта жизнь дана нам не спроста. Эту жизнь надо ценить.";

    $quote = mb_strtoupper(mb_substr($quote, 0, 1)) . mb_substr($quote, 1);

    echo str_replace("жизнь", "Жизнь", mb_substr($quote, 0, 10));
    ?>

</body>

</html>