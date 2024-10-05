<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "__LINE__: " . __LINE__ . "<br>";
    echo "__FILE__: " . __FILE__ . "<br>";
    echo "__DIR__: " . __DIR__ . "<br>";

    function func()
    {
        echo "__FUNCTION__ " . __FUNCTION__ . "<br>";
    }

    func();

    class JTP
    {
        public function __construct()
        {
            ;
        }
        function getClassName()
        {
            echo "__CLASS__ " . __CLASS__ . "<br>";
        }
    }
    $t = new JTP;
    $t->getClassName();


    trait created_trait
    {
        public function jtp(): string
        {
            return "__TRAIT__ " . __TRAIT__ . "<br>";
        }
    }
    class Company
    {
        use created_trait;
    }

    $a = new Company;
    echo $a->jtp();


    class method
    {
        public function __construct()
        {
            echo "__METHOD__ " . __METHOD__ . "<br>";
        }
        public function meth_fun()
        {
            echo "__METHOD__ " . __METHOD__ . "<br>";
        }
    }
    $a = new method;
    $a->meth_fun();

    class SomeClass
    {
    }

    echo "class " . SomeClass::class . "<br><br>";


    echo 'PHP Version: ' . PHP_VERSION . "<br>";
    echo 'Operating System: ' . PHP_OS . "<br>";
    echo 'Max Integer: ' . PHP_INT_MAX . "<br>";
    echo 'End of Line Character: ' . PHP_EOL . "<br>";
    echo 'Server API: ' . PHP_SAPI . "<br>";
    ?>
</body>

</html>