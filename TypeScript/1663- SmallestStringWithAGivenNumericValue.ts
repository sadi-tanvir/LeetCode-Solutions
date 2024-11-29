/****************************************************************************************
    Problem Name: 1663. Smallest String With A Given Numeric Value
    Problem Link: https://leetcode.com/problems/smallest-string-with-a-given-numeric-value/description/
*****************************************************************************************/


function getSmallestString(n: number, k: number): string {
    const letters: [string, number][] = [['a', 1], ['b', 2], ['c', 3], ['d', 4], ['e', 5],
    ['f', 6], ['g', 7], ['h', 8], ['i', 9], ['j', 10],
    ['k', 11], ['l', 12], ['m', 13], ['n', 14], ['o', 15],
    ['p', 16], ['q', 17], ['r', 18], ['s', 19], ['t', 20],
    ['u', 21], ['v', 22], ['w', 23], ['x', 24], ['y', 25],
    ['z', 26]];

    let index: number = letters.length - 1;
    let str: string = "";
    while (k > 0) {
        if (k - letters[index][1] >= n - 1) {
            str = letters[index][0] + str;
            k = k - letters[index][1];
            n--;
        } else {
            index--;
        }
    }

    return str;
};


console.warn(getSmallestString(3, 27));
console.warn(getSmallestString(5, 73));