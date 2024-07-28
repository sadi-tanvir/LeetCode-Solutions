<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3163. String Compression III</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>3163. String Compression III</h1>

    <!-- https://leetcode.com/problems/string-compression-iii/description/ -->


    <?php
    class Solution
    {
        function compressedString($word)
        {
            $newChar = "";
            $n = strlen($word);
            $currentChar = $word[0];
            $tempCount = 1;
            for ($i = 1; $i <= $n; $i++) {
                if ($word[$i] === $currentChar) {
                    $tempCount++;
                } else {
                    while ($tempCount > 9) {
                        $tempCount -= 9;
                        $newChar = $newChar . '9' . $currentChar;
                    }

                    if ($tempCount > 0) {
                        $newChar = $newChar . strval($tempCount) . $currentChar;
                    }

                    if ($i < $n) {
                        $tempCount = 1;
                        $currentChar = $word[$i];
                    }
                }
            }

            return $newChar;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->compressedString("abcde")) . '</pre>';
    echo '<pre>' . json_encode($solution->compressedString("aaaaaaaaaaaaaabb")) . '</pre>';
    echo '<pre>' . json_encode($solution->compressedString("cccccccccc")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>