/****************************************************************************************
    Problem Name: 2160. Minimum Sum of Four Digit Number After Splitting Digits
    Problem Link: https://leetcode.com/problems/minimum-sum-of-four-digit-number-after-splitting-digits/description/ 
*****************************************************************************************/


function minimumSum(num: number): number {
    let digits: number[] = num.toString().split('').map(Number);

    digits.sort((a: number, b: number) => a - b);

    let num1: number = digits[0] * 10 + digits[2];
    let num2: number = digits[1] * 10 + digits[3];

    return num1 + num2;
};


console.warn(minimumSum(2932));
console.warn(minimumSum(4009));