<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>58. Length of Last Word</title>
</head>

<body>
    <h1>58. Length of Last Word</h1>

    <!-- https://leetcode.com/problems/length-of-last-word/description/ -->

    <?php
    class Solution
    {
        function lengthOfLastWord($s)
        {
            $s = trim($s);
            $count = 0;
            for ($i = strlen($s) - 1; $i >= 0; $i--) {
                if ($s[$i] === " ")
                    break;
                $count++;
            }
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->lengthOfLastWord("Hello World")) . '</pre>';
    echo '<pre>' . json_encode($solution->lengthOfLastWord("   fly me   to   the moon  ")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>