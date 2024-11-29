<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1720. Decode XORed Array</title>
</head>

<body>
    <h1>1720. Decode XORed Array</h1>

    <!-- https://leetcode.com/problems/decode-xored-array/description/ -->

    <?php

    function decode($encoded, $first)
    {
        $decode = [$first];
        for ($i = 0; $i < count($encoded); $i++) {
            $decode[] = $decode[$i] ^ $encoded[$i];
        }
        return $decode;
    }


    // echo '<pre>' . json_encode(decode([1, 2, 3], 1)) . '</pre>';
    echo '<pre>' . json_encode(decode([6, 2, 7, 3], 4)) . '</pre>';
    ?>
</body>

</html>