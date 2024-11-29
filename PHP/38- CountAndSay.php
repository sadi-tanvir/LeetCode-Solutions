<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38. Count and Say</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>38. Count and Say</h1>

    <!-- https://leetcode.com/problems/count-and-say/description/ -->


    <?php
    class Solution
    {
        function countAndSay($n)
        {
            $sequence = "0";
            $sequence = $this->generateSequence($n, $sequence);
            return $sequence;
        }

        function generateSequence($n, $sequence)
        {
            if ($n === 0)
                return $sequence;
            $sequence = $this->generateNextTerm($sequence);
            return $this->generateSequence($n - 1, $sequence);
        }

        function generateNextTerm($sequence)
        {
            if ($sequence === "0") {
                return "1";
            }
            $nextSequence = "";
            $currentChar = "";
            $charCount = 0;

            for ($i = 0; $i < strlen($sequence); $i++) {
                if ($currentChar === $sequence[$i]) {
                    $charCount++;
                } else {
                    if ($charCount > 0) {
                        $nextSequence = $nextSequence . strval($charCount) . $currentChar;
                    }
                    $currentChar = $sequence[$i];
                    $charCount = 1;
                }
            }

            if ($charCount > 0) {
                $nextSequence = $nextSequence . strval($charCount) . $currentChar;
            }

            return $nextSequence;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->countAndSay(4)) . '</pre>';
    echo '<pre>' . json_encode($solution->countAndSay(1)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>