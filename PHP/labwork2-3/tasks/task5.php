<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Переменные типа float
    $float1 = 1.23;
    $float2 = 4.56;
    $float3 = .89;
    $float4 = 2.12;
    $float5 = pi();
    $float6 = 6.78;
    $float7 = (float) "7.21";
    $float8 = 2.34;
    $float9 = 5.67;
    $float10 = 8.90;

    // Переменные типа string
    $string1 = "Hello, World!";
    $string2 = 'PHP is fun!';
    $string3 = <<<EOD
Многострочная строка 
по синтаксису heredoc.
EOD;

    // Вывод значений переменных
// Способ 1: echo
    echo "Float1: $float1<br>";
    echo "Float2: $float2<br>";
    echo "Float3: $float3<br>";
    echo "Float4: $float4<br>";
    echo "Float5: $float5<br>";
    echo "Float6: $float6<br>";
    echo "Float7: $float7<br>";
    echo "Float8: $float8<br>";
    echo "Float9: $float9<br>";
    echo "Float10: $float10<br>";
    echo "String1: $string1<br>";
    echo "String2: $string2<br>";
    echo "String3: $string3<br>";
    echo "<br>";

    // Способ 2: print
    print "Float1: $float1<br>";
    print "Float2: $float2<br>";
    print "Float3: $float3<br>";
    print "Float4: $float4<br>";
    print "Float5: $float5<br>";
    print "Float6: $float6<br>";
    print "Float7: $float7<br>";
    print "Float8: $float8<br>";
    print "Float9: $float9<br>";
    print "Float10: $float10<br>";
    print "String1: $string1<br>";
    print "String2: $string2<br>";
    print "String3: $string3<br>";
    echo "<br>";


    // Способ 3: printf
    printf("Float1: %.2f<br>", $float1);
    printf("Float2: %.2f<br>", $float2);
    printf("Float3: %.2f<br>", $float3);
    printf("Float4: %.2f<br>", $float4);
    printf("Float5: %.2f<br>", $float5);
    printf("Float6: %.2f<br>", $float6);
    printf("Float7: %.2f<br>", $float7);
    printf("Float8: %.2f<br>", $float8);
    printf("Float9: %.2f<br>", $float9);
    printf("Float10: %.2f<br>", $float10);
    printf("String1: %s<br>", $string1);
    printf("String2: %s<br>", $string2);
    printf("String3: %s<br>", $string3);
    echo "<br>";

    ?>


</body>

</html>