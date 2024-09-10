<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>242. Valid Anagram</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>242. Valid Anagram</h1>

    <!-- https://leetcode.com/problems/valid-anagram/description/ -->

    <?php
    class Solution
    {
        function isAnagram($s, $t)
        {
            if (strlen($s) != strlen($t))
                return false;
            $s = str_split($s);
            sort($s);
            $t = str_split($t);
            sort($t);
            for ($i = 0; $i < count($s); $i++) {
                if ($s[$i] != $t[$i]) {
                    return false;
                }
            }

            return true;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->isAnagram("anagram", "nagaram")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>