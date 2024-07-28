/****************************************************************************************
    Problem Name: 443. String Compression
    Problem Link: https://leetcode.com/problems/string-compression/description/
*****************************************************************************************/


function compress(chars: string[]): number {
    let n: number = chars.length;
    if (n === 1) return 1;
    let index: number = 0, currentChar: string = chars[0], tempCount: number = 0;

    for (let i: number = 1; i <= n; i++) {
        if (currentChar === chars[i]) tempCount++;
        else {
            chars[index++] = currentChar;
            if (tempCount > 0) {
                let countChar: string = (tempCount + 1).toString();
                for (const char of countChar) chars[index++] = char;
            }

            if (i < n) {
                tempCount = 0;
                currentChar = chars[i];
            }
        }
    }

    return index;
};


console.warn(compress(["a", "b", "b", "c", "c", "c"]));
console.warn(compress(["a"]));
console.warn(compress(["a", "a", "a", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b", "b"]));