/****************************************************************************************
    Problem Name: 28. Find the Index of the First Occurrence in a String
    Problem Link: https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/
*****************************************************************************************/


function strStr(haystack: string, needle: string): number {
    return haystack.indexOf(needle);
};

console.warn(strStr("sadbutsad", "sad"));
console.warn(strStr("leetcode", "leeto"));