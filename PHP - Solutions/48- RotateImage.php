<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>48. Rotate Image</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>48. Rotate Image</h1>

    <!-- https://leetcode.com/problems/rotate-image/description/-->

    <?php
    class Solution
    {
        function rotate($matrix)
        {
            $n = count($matrix);

            for ($i = 0; $i < $n; $i++) {
                for ($j = $i; $j < $n; $j++) {
                    $temp = $matrix[$i][$j];
                    $matrix[$i][$j] = $matrix[$j][$i];
                    $matrix[$j][$i] = $temp;
                }
            }

            for ($i = 0; $i < $n; $i++) {
                $matrix[$i] = array_reverse($matrix[$i]);
            }

            return $matrix;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->rotate([[1, 2, 3], [4, 5, 6], [7, 8, 9]])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>