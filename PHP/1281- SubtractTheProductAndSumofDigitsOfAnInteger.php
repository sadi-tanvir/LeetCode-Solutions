<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1281. Subtract the Product and Sum of Digits of an Integer</title>
</head>

<body>
    <h1>1281. Subtract the Product and Sum of Digits of an Integer</h1>

    <!-- https://leetcode.com/problems/subtract-the-product-and-sum-of-digits-of-an-integer/description/ -->

    <?php
    // solution - 1
    function subtractProductAndSum($n)
    {
        $sum = 0;
        $multiply = 1;
        while ($n != 0) {
            $lastDigit = $n % 10;
            $sum = $sum + $lastDigit;
            $multiply = $multiply * $lastDigit;
            $n = floor($n / 10);
        }
        return $multiply - $sum;
    }


    echo '<pre>' . json_encode(subtractProductAndSum(4421)) . '</pre>';
    echo '<pre>' . json_encode(subtractProductAndSum(234)) . '</pre>';

    // solution - 2
    /*  function subtractProductAndSum($n)
    {
        $sum = 0;
        $multiply = 1;
        $length = strlen(strval($n));
        for($i = 0; $i < $length; $i++){
            $lastDigit = $n % 10;
            $sum = $sum + $lastDigit;
            $multiply = $multiply * $lastDigit;
            $n = floor($n / 10);
        }
        return $multiply - $sum;
    }*/
    ?>


    <!-- php -S localhost:8000 -->

</body>

</html>