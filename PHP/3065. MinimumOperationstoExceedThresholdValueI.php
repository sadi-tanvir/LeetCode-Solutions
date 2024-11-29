<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3065. Minimum Operations to Exceed Threshold Value I</title>
</head>

<body>
    <h1>3065. Minimum Operations to Exceed Threshold Value I</h1>

    <?php
    class Solution
    {
        function minOperations($nums, $k) {
            $count = 0;
            for ($i = 0; $i < count($nums); $i++) if ($k > $nums[$i]) $count++;
            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->minOperations([2, 11, 10, 1, 3], 10)) . '</pre>';
    echo '<pre>' . json_encode($solution->minOperations([1, 1, 2, 4, 9], 1)) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>