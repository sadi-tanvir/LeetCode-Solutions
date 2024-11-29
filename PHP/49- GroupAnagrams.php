<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>49. Group Anagrams</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>49. Group Anagrams</h1>

    <!-- https://leetcode.com/problems/group-anagrams/description/ -->

    <?php
    class Solution
    {
        function groupAnagrams($strs)
        {
            $temp = [];
            $result = [];
            $n = count($strs);
            $tempIdx = 0;

            for ($i = 0; $i < $n; $i++) {
                $tempArray = str_split($strs[$i]);
                sort($tempArray);
                $sorted = implode("", $tempArray);
                if (isset($temp[$sorted])) {
                    // $result[$temp[$sorted] - 1].push($strs[$i]);
                    $result[$temp[$sorted] - 1][] = $strs[$i];
                } else {
                    $temp[$sorted] = ++$tempIdx;
                    $result[$tempIdx - 1] = [$strs[$i]];
                }
            }

            return $result;
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"])) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>