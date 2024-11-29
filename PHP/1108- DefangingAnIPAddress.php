<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1108. Defanging an IP Address</title>
</head>

<body style="width: 100vw; height: 100vh; background: #000; color: white">
    <h1>1108. Defanging an IP Address</h1>

    <!-- https://leetcode.com/problems/defanging-an-ip-address/description/ -->

    <?php
    class Solution
    {
        function defangIPaddr($address)
        {
            return str_replace(".", "[.]", $address);
        }
    }

    $solution = new Solution();
    echo '<pre>' . json_encode($solution->defangIPaddr("1.1.1.1")) . '</pre>';
    ?>

    <!-- php -S localhost:8000 -->

</body>

</html>