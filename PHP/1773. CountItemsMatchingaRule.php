<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1773. Count Items Matching a Rule</title>
</head>

<body>
    <h1>1773. Count Items Matching a Rule</h1>

    <!-- https://leetcode.com/problems/count-items-matching-a-rule/description/  -->

    <?php
    class Solution
    {
        function countMatches($items, $ruleKey, $ruleValue)
        {
            $count = 0;
            foreach ($items as $item) {
                list($type, $color, $name) = $item;
                if (
                    ($ruleKey === "type") && ($type === $ruleValue) ||
                    ($ruleKey === "color") && ($color === $ruleValue) ||
                    ($ruleKey === "name") && ($name === $ruleValue)
                )
                    $count++;
            }


            return $count;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->countMatches([["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"], ["qqqq", "qqqq", "qqqq"]], "name", "qqqq")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>