<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2535. Difference Between Element Sum and Digit Sum of an Array</title>
</head>

<body>
    <h1>2535. Difference Between Element Sum and Digit Sum of an Array</h1>

    <!-- https://leetcode.com/problems/difference-between-element-sum-and-digit-sum-of-an-array/description/ -->

    <?php
    class Solution
    {
        // solution - 1
        function differenceOfSum($nums)
        {
            $sum = array_reduce($nums, function ($carry, $item) {
                return $carry + $item;
            });
            $digitSum = array_reduce(str_split(implode("", $nums)), function ($carry, $item) {
                return $carry + $item;
            });
            return $sum - $digitSum;
        }

        // solution 2
        /*  function differenceOfSum($nums)
         {
             $sum = 0;
             $digitSum = 0;
             $temp = str_split(implode("", $nums));
             for ($i=0; $i < count($temp); $i++) $digitSum += $temp[$i];
             for ($i=0; $i < count($nums); $i++) $sum += $nums[$i];
             return $sum - $digitSum;
         } */
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->differenceOfSum([1, 15, 6, 3])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>