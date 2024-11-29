/****************************************************************************************
    Problem Name: 202. Happy Number
    Problem Link: https://leetcode.com/problems/happy-number/description/
*****************************************************************************************/

function isHappy(n: number): boolean {
    let numbers: Set<number> = new Set();
    while (n != 1) {
        if (numbers.has(n)) return false;
        numbers.add(n);
        let sum: number = 0;
        while (n > 0) {
            let digit: number = n % 10;
            sum += digit * digit;
            n = Math.floor(n / 10);
        }
        n = sum;
    }

    return n === 1;
};

console.warn(isHappy(19));
console.warn(isHappy(2));