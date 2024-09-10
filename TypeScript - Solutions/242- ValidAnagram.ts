/****************************************************************************************
    Problem Name: 242. Valid Anagram
    Problem Link: https://leetcode.com/problems/valid-anagram/description/
*****************************************************************************************/


function isAnagram(s: string, t: string): boolean {
    if (s.length !== t.length) return false;
    s = s.split("").sort().join("");
    t = t.split("").sort().join("");
    for (let i: number = 0; i < s.length; i++) {
        if (s[i] != t[i]) {
            return false;
        }
    }

    return true;
};

console.warn(isAnagram("anagram", "nagaram"));