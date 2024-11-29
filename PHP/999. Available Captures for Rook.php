<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>67. Add Binary</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>67. Add Binary</h1>

    <!-- https://leetcode.com/problems/add-binary/ -->

    <?php
    class Solution
    {
        function numRookCaptures($board) {
            $rowLength = count($board);
            $colLength = count($board[0]);
            $rowPos = -1;
            $colPos = -1;
            $count = 0;

            for ($row = 0; $row < $rowLength; $row++) {
                for ($col = 0; $col < $colLength; $col++) {
                    if ($board[$row][$col] === "R") {
                        $rowPos = $row;
                        $colPos = $col;
                    }
                }
            }


            for ($row = $rowPos - 1; $row >= 0; $row--) {
                if ($board[$row][$colPos] === "p") {
                    $count++;
                    break;
                } else if ($board[$row][$colPos] === ".") {
                    continue;
                } else {
                    break;
                }
            }

            for ($row = $rowPos + 1; $row < $rowLength; $row++) {
                if ($board[$row][$colPos] === "p") {
                    $count++;
                    break;
                } else if ($board[$row][$colPos] === ".") {
                    continue;
                } else {
                    break;
                }
            }

            for($col = $colPos - 1; $col >= 0; $col--){
                if ($board[$rowPos][$col] === "p") {
                    $count++;
                    break;
                } else if ($board[$rowPos][$col] === ".") {
                    continue;
                } else {
                    break;
                }
            }

            for($col = $colPos + 1; $col < $colLength; $col++){
                if ($board[$rowPos][$col] === "p") {
                    $count++;
                    break;
                } else if ($board[$rowPos][$col] === ".") {
                    continue;
                } else {
                    break;
                }
            }

            return $count;
    }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->numRookCaptures([[".", ".", ".", "", ".", ".", ".", "."], [".", ".", ".", "p", ".", ".", ".", "."], [".", ".", ".", "R", ".", ".", ".", "p"], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", "p", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."]])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>