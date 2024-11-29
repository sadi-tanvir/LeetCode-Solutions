/****************************************************************************************
    Problem Name: 3163. String Compression III
    Problem Link: https://leetcode.com/problems/string-compression-iii/description/
*****************************************************************************************/


function compressedString(word: string): string {
    let newChar: string = "", n: number = word.length, currentChar: string = word[0], tempCount: number = 1;
    for (let i: number = 1; i <= n; i++) {
        if (word[i] === currentChar) {
            tempCount++;
        } else {
            while (tempCount > 9) {
                tempCount -= 9;
                newChar = newChar + '9' + currentChar;
            }

            if (tempCount > 0) {
                newChar += tempCount + currentChar;
            }

            if (i < n) {
                tempCount = 1;
                currentChar = word[i];
            }
        }
    }

    return newChar;
};


console.warn(compressedString("abcde"));
console.warn(compressedString("aaaaaaaaaaaaaabb"));
console.warn(compressedString("cccccccccc"));