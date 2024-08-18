<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373. Largest Local Values in a Matrix</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>2373. Largest Local Values in a Matrix</h1>

    <!-- https://leetcode.com/problems/largest-local-values-in-a-matrix/description/ -->


    <?php
    class Solution
    {
        function largestLocal ($grid) {
            $n = count($grid);
             $result = array_fill(0, $n - 2, array_fill(0, $n - 2, 0));
             for ($row = 0; $row < $n - 2; $row++) {
                 for ($col = 0; $col < $n - 2; $col++) {
                     $maxVal = -INF;
                     for ($rowF = $row; $rowF <= $row + 2; $rowF++) {
                         for ($colF = $col; $colF <= $col + 2; $colF++) {
                             $maxVal = max($grid[$rowF][$colF], $maxVal);
                         }
                     }
                     $result[$row][$col] = $maxVal;
                 }
             } 
 
             return $result;
         }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->largestLocal([[9, 9, 8, 1], [5, 6, 2, 6], [8, 2, 6, 4], [6, 2, 2, 2]])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>