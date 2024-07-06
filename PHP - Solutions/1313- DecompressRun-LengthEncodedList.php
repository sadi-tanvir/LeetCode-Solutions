<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1313. Decompress Run-Length Encoded List</title>
</head>

<body>
    <h1>1313. Decompress Run-Length Encoded List</h1>

    <!-- https://leetcode.com/problems/decompress-run-length-encoded-list/description/ -->

    <?php
    class Solution
    {
        function decompressRLElist($nums)
        {
            $result = [];

            for ($i = 0; $i < count($nums); $i += 2) {
                for ($j = 0; $j < $nums[$i]; $j++) {
                    $result[count($result)] = $nums[$i + 1];
                }
            }

            return $result;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->decompressRLElist([1, 2, 3, 4])) . '</pre>';
    echo '<pre>' . json_encode($solution->decompressRLElist([1, 1, 2, 3])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>