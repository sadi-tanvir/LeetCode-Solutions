<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1009. Complement of Base 10 Integer</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <h1>1009. Complement of Base 10 Integer</h1>

    <!-- https://leetcode.com/problems/complement-of-base-10-integer/description/ -->

    <?php
    class Solution
    {
        function bitwiseComplement($n) {
            $binary = decbin($n);
            $complement = "";
            $temp = str_split($binary);
            for ($i=0; $i < count($temp); $i++) { 
                if($temp[$i] == '0') {
                    $complement = $complement . "1";
                } else {
                    $complement = $complement . "0";
                }
            }
            return bindec($complement);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->bitwiseComplement(5)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>