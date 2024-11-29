/****************************************************************************************
    Problem Name: 58. Length of Last Word
    Problem Link: https://leetcode.com/problems/length-of-last-word/description/
*****************************************************************************************/


function lengthOfLastWord(s: string): number {
    s = s.trim();
    let count: number = 0;
    for (let i = s.length - 1; i >= 0; i--) {
        if (s[i] === " ") break;
        count++
    }
    return count;
};

console.warn(lengthOfLastWord("Hello World"));
console.warn(lengthOfLastWord("   fly me   to   the moon  "));