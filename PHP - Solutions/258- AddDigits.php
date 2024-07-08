<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>258. Add Digits</title>
</head>

<body>
    <h1>258. Add Digits</h1>

    <!-- https://leetcode.com/problems/add-digits/description/ -->

    <?php
    class Solution
    {

        // solution - 1 mathematical approach 
        function addDigits($num)
        {
            return (($num !== 0) && ($num % 9) == 0) ? 9 : $num % 9;
        }
        
        

        // solution - 2 recursive approach
        /* function addDigits($num)
        {
            if ($num < 10) {
                return $num;
            }
            $num = array_reduce(str_split(strval($num)), function ($carry, $item) {
                return $carry + intval($item);
            });
            return $this->addDigits($num);
        } */


        

        // solution - 3 iterative approach
        /* function addDigits($num)
        {
            while ($num > 9) {
                $num = array_reduce(str_split(strval($num)), function ($carry, $item) {
                    return $carry + intval($item);
                });

            }
            return $num;
        } */
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->addDigits(38)) . '</pre>';
    echo '<pre>' . json_encode($solution->addDigits(0)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>