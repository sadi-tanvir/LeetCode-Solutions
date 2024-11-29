<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1380. Lucky Numbers in a Matrix</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>1380. Lucky Numbers in a Matrix</h1>

    <!-- https://leetcode.com/problems/lucky-numbers-in-a-matrix/description/ -->


    <?php
    class Solution
    {
        function luckyNumbers($matrix)
        {
            $rowLength = count($matrix);
            $colLength = count($matrix[0]);
            $targetColumn = -1;
            $minElem = PHP_FLOAT_MAX;
            $status = false;
            for ($row = 0; $row < $rowLength; $row++) {
                $targetColumn = -1;
                $minElem = PHP_FLOAT_MAX;
                $status = false;
                for ($col = 0; $col < $colLength; $col++) {
                    if ($minElem > $matrix[$row][$col]) {
                        $minElem = $matrix[$row][$col];
                        $targetColumn = $col;
                    }
                }

                for ($row2 = 0; $row2 < $rowLength; $row2++) {
                    if ($matrix[$row2][$targetColumn] <= $minElem) {
                        $status = true;
                    } else {
                        $status = false;
                        break;
                    }

                    if ($row2 === $rowLength - 1 && $status) {
                        return [$minElem];
                    }
                }
            }

            return [];
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->luckyNumbers([[3,7,8],[9,11,13],[15,16,17]])) . '</pre>';
    
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>