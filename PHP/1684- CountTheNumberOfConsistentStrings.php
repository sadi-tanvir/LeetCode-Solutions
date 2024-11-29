<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1684. Count the Number of Consistent Strings</title>
    <style>
        body {
            background-color: #121212;
            /* Dark background color */
            color: #ffffff;
            /* Light text color for contrast */
            font-family: Arial, sans-serif;
            /* Optional: change the font */
        }

        h1 {
            color: #ffffff;
            /* Light text color for the heading */
        }
    </style>
</head>

<body>
    <h1>1684. Count the Number of Consistent Strings</h1>

    <!-- https://leetcode.com/problems/count-the-number-of-consistent-strings/description/ -->

    <?php
    class Solution
    {
        function countConsistentStrings($allowed, $words)
        {
            $count = 0;
            $allowed = str_split($allowed);
            for ($i = 0; $i < count($words); $i++) {
                $valid = true;
                for ($j = 0; $j < strlen($words[$i]); $j++) {
                    if (!in_array($words[$i][$j], $allowed)) {
                        $valid = false;
                    };
                };
                if ($valid) $count++;
            }
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->countConsistentStrings("ab", ["ad", "bd", "aaab", "baa", "badab"])) . '</pre>';
    echo '<pre>' . json_encode($solution->countConsistentStrings("abc", ["a","b","c","ab","ac","bc","abc"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>