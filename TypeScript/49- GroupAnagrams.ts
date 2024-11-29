/****************************************************************************************
    Problem Name: 49. Group Anagrams
    Problem Link: https://leetcode.com/problems/group-anagrams/description/
*****************************************************************************************/


function groupAnagrams(strs: string[]): string[][] {
    let temp: { [key: string]: number } = {};
    let result: string[][] = [];
    let n: number = strs.length;
    let tempIdx: number = 0;

    for (let i: number = 0; i < n; i++) {
        let sorted: string = strs[i].split("").sort().join("");
        if (temp[sorted]) {
            result[temp[sorted] - 1].push(strs[i]);
        } else {
            temp[sorted] = ++tempIdx;
            result[tempIdx - 1] = [strs[i]];
        }
    }

    return result;
};

console.log(groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"]));