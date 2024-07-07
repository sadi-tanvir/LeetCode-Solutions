<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1816. Truncate Sentence</title>
</head>

<body>
    <h1>1816. Truncate Sentence</h1>

    <!-- https://leetcode.com/problems/truncate-sentence/description/  -->

    <?php
    class Solution
    {
        function truncateSentence($s, $k)
        {
            $s = explode(" ", $s);
            $s = array_slice($s, 0, $k);
            return implode(" ", $s);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->truncateSentence("Hello how are you Contestant", 4)) . '</pre>';
    echo '<pre>' . json_encode($solution->truncateSentence("What is the solution to this problem", 4)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>