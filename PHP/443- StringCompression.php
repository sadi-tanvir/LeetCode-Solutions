<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>443. String Compression</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000;">
    <div>
        <h1>443. String Compression</h1>
    </div>

    <!-- https://leetcode.com/problems/string-compression/description/ -->

    <?php
    class Solution
    {
        function compress ($chars) {
            $n = count($chars);
            if ($n === 1) return 1;
            $index = 0;
            $currentChar = $chars[0];
            $tempCount = 0;

            for ($i = 1; $i <= $n; $i++) {
                if ($currentChar === $chars[$i]) $tempCount++;
                else {
                    $chars[$index++] = $currentChar;
                    if ($tempCount > 0) {
                        $countChar = str_split(strval($tempCount + 1));
                        foreach ($countChar as $char) {
                            $chars[$index++] = $char;
                        }
                    }

                    if ($i < $n) {
                        $tempCount = 0;
                        $currentChar = $chars[$i];
                    }
                }
            }

            return $index;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->compress(["a", "b", "b", "c", "c", "c"])) . '</pre>';
    echo '<pre>' . json_encode($solution->compress(["a"])) . '</pre>';
    echo '<pre>' . json_encode($solution->compress(["a", "a", "a", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>