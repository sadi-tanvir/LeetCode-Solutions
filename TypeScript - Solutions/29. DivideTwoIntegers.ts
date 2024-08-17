/****************************************************************************************
    Problem Name: 29. Divide Two Integers
    Problem Link: https://leetcode.com/problems/divide-two-integers/description/
*****************************************************************************************/


function divide(dividend: number, divisor: number): number {
    let res: number = Math.trunc(dividend / divisor);
    let max: number = 2 ** 31;
    let min: number = (-2) ** 31;
    if (res >= max) {
        return max - 1;
    } else if (res <= min) {
        return min
    } else {
        return res;
    };
};

console.log(divide(10, 3));
console.log(divide(7, -3));
console.log(divide(-2147483648, -1));
console.log(divide(-2147483648, 1));