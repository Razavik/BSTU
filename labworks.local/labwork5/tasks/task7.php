<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $phoneNumber = "1234567890";

    $countryCode = substr($phoneNumber, 0, 1);
    $areaCode = substr($phoneNumber, 1, 3);
    $areaCode = str_replace($areaCode, "(" . $areaCode . ")", $areaCode);
    $firstPart = substr($phoneNumber, 4, 3);
    $secondPart = substr($phoneNumber, 7, 4);
    
    $formattedNumber = sprintf("+%s %s %s-%s", $countryCode, $areaCode, $firstPart, $secondPart);

    echo $formattedNumber;
    
    ?>
</body>

</html>