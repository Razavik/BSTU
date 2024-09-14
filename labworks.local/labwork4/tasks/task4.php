<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        th{
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    function convertNumber($number, $base)
    {
        switch ($base) {
            case 10:
                return [
                    'decimal' => $number,
                    'binary' => decbin($number),
                    'octal' => decoct($number),
                    'hexadecimal' => dechex($number)
                ];
            case 2:
                $decimal = bindec($number);
                return [
                    'decimal' => $decimal,
                    'binary' => $number,
                    'octal' => decoct($decimal),
                    'hexadecimal' => dechex($decimal)
                ];
            case 8:
                $decimal = octdec($number);
                return [
                    'decimal' => $decimal,
                    'binary' => decbin($decimal),
                    'octal' => $number,
                    'hexadecimal' => dechex($decimal)
                ];
            case 16:
                $decimal = hexdec($number);
                return [
                    'decimal' => $decimal,
                    'binary' => decbin($decimal),
                    'octal' => decoct($decimal),
                    'hexadecimal' => $number
                ];
        }
    }

    $numbers = [
        ['number' => 110, 'base' => 10],
        ['number' => '11001', 'base' => 2],
        ['number' => 156, 'base' => 8],
        ['number' => '65', 'base' => 16]
    ];

    echo "<table border='1'>";
    echo "<tr><th>Исходное число</th><th>В 10-ной системе</th><th>В 2-ной системе</th><th>В 8-ной системе</th><th>В 16-ной системе</th></tr>";

    foreach ($numbers as $num) {
        $converted = convertNumber($num['number'], $num['base']);
        echo "<tr>";
        echo "<td>{$num['number']}</td>";
        echo "<td>" . ($num['base'] != 10 ? $converted['decimal'] : "-") . "</td>";
        echo "<td>" . ($num['base'] != 2 ? $converted['binary'] : "-") . "</td>";
        echo "<td>" . ($num['base'] != 8 ? $converted['octal'] : "-") . "</td>";
        echo "<td>" . ($num['base'] != 16 ? $converted['hexadecimal'] : "-") . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>