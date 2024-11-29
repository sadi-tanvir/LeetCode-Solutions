/****************************************************************************************
    Problem Name: 67. Add Binary
    Problem Link: https://leetcode.com/problems/add-binary/
*****************************************************************************************/


function addBinary(a: string, b: string): string {
    return (BigInt('0b' + a) + BigInt('0b' + b)).toString(2);
};

console.log(addBinary("11", "1"));