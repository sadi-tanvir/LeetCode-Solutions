<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1528. Shuffle String</title>
</head>

<body>
    <h1>1528. Shuffle String</h1>

    <!-- https://leetcode.com/problems/shuffle-string/  -->

    <?php
    class Solution
    {
        function restoreString($s, $indices)
        {
            $n = count($indices);
            $newStr = array_fill(0, $n, null);
            for ($i = 0; $i < $n; $i++) {
                $newStr[$indices[$i]] = $s[$i];
            }
            return implode("", $newStr);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->restoreString("codeleet", [4, 5, 6, 7, 0, 2, 1, 3])) . '</pre>';
    echo '<pre>' . json_encode($solution->restoreString("abc", [0, 1, 2])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>