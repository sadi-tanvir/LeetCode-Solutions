<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2506. Count Pairs Of Similar Strings</title>
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
    <h1>2506. Count Pairs Of Similar Strings</h1>

    <!-- https://leetcode.com/problems/count-pairs-of-similar-strings/description/ -->

    <?php
    class Solution
    {
        function similarPairs($words) {
            $count = 0;
    
            for ($i = 0; $i < count($words) - 1; $i++) {
                for ($j = $i + 1; $j < count($words); $j++) {
                    $setA = array_unique(str_split($words[$i]));
                    $setB = array_unique(str_split($words[$j]));
    
                    if (count($setA) === count($setB) && !array_diff($setA, $setB)) {
                        $count++;
                    }
                }
            }
    
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->similarPairs(["aba", "aabb", "abcd", "bac", "aabc"])) . '</pre>';
    echo '<pre>' . json_encode($solution->similarPairs(["aabb", "ab", "ba"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>