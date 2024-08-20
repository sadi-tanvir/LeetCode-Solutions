<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20. Valid Parentheses</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>20. Valid Parentheses</h1>

    <!-- https://leetcode.com/problems/valid-parentheses/description/ -->

    <?php
    class Solution
    {
        function isValid($s)
        {
            $brackets = [
                "(" => ")",
                "[" => "]",
                "{" => "}"
            ];
            $index = 0;

            while ($index >= 0 || strlen($s) > 0) {
                if ($index > strlen($s)) {
                    break;
                }
                if ($brackets[$s[$index]] && $brackets[$s[$index]] === $s[$index + 1]) {
                    $s = substr($s, 0, $index) . substr($s, $index + 2);
                    $index--;
                } else {
                    $index++;
                }
            }

            return strlen($s) === 0;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isValid("()")) . '</pre>';
    echo '<pre>' . json_encode($solution->isValid("[](){}")) . '</pre>';
    echo '<pre>' . json_encode($solution->isValid("{[]}")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>