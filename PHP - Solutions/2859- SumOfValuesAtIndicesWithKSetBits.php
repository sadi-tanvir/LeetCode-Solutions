<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2859. Sum of Values at Indices With K Set Bits</title>
    <style>
        body {
            background-color: #121212; /* Dark background color */
            color: #ffffff; /* Light text color for contrast */
            font-family: Arial, sans-serif; /* Optional: change the font */
        }

        h1 {
            color: #ffffff; /* Light text color for the heading */
        }
    </style>
</head>

<body>
    <h1>2859. Sum of Values at Indices With K Set Bits</h1>

    <!-- https://leetcode.com/problems/sum-of-values-at-indices-with-k-set-bits/description/ -->

    <?php
    class Solution
    {
        function sumIndicesWithKSetBits($nums, $k)
        {
            $sum = 0;
            for ($i = 0; $i < count($nums); $i++) {
                $binary = decbin($i);
                $temp = substr_count($binary, '1');
                if ($temp == $k) {
                    print ($temp) . '<br>';
                    $sum += $nums[$i];
                }
            }
            return $sum;
        }
    }

    $solution = new Solution();
    // echo '<pre>' . json_encode($solution->sumIndicesWithKSetBits([5, 10, 1, 5, 2], 1)) . '</pre>';
    echo '<pre>' . json_encode($solution->sumIndicesWithKSetBits([4, 3, 2, 1], 2)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>