<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fullName = "гааг даниил игоревич";

    $nameParts = explode(" ", $fullName);

    $formattedName = mb_convert_case(implode(" ", $nameParts), MB_CASE_TITLE);

    echo $formattedName;
    ?>

</body>

</html>