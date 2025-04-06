/****************************************************************************************
    Problem Name: 136. Single Number
    Problem Link: https://leetcode.com/problems/single-number/description/
*****************************************************************************************/


function singleNumber(nums: number[]): number {
    let track:{[key:number]:number} = {};

    for (let i:number = 0; i < nums.length; i++) {
        if (track[nums[i]]) {
            delete track[nums[i]];
        } else {
            track[nums[i]] = 1;
        }
    }


    return Number(Object.keys(track)[0]);
};


console.warn(singleNumber([2,2,1]));
console.warn(singleNumber([4,1,2,1,2]));