/****************************************************************************************
    Problem Name: 18. 4Sum
    Problem Link: https://leetcode.com/problems/4sum/description/
*****************************************************************************************/


function fourSum(nums: number[], target: number): number[][] {
    nums = nums.sort((a, b) => a - b);
    let result: number[][] = [];
    let n: number = nums.length;

    for (let i = 0; i < n - 3; i++) {
        if (i > 0 && nums[i] === nums[i - 1]) continue;
        for (let j = i + 1; j < n - 2; j++) {
            if (j > i + 1 && nums[j] === nums[j - 1]) continue;
            let leftPointer: number = j + 1, rightPointer: number = n - 1;
            while (leftPointer < rightPointer) {
                let sum: number = nums[i] + nums[j] + nums[leftPointer] + nums[rightPointer];
                if (sum === target) {
                    let tempArr: number[] = [nums[i], nums[j], nums[leftPointer], nums[rightPointer]];
                    result.push(tempArr);
                    while (leftPointer < rightPointer && nums[leftPointer] === nums[leftPointer + 1]) leftPointer++;
                    while (leftPointer < rightPointer && nums[rightPointer] === nums[rightPointer - 1]) rightPointer--;
                    leftPointer++;
                } else if (sum < target) {
                    leftPointer++;
                } else {
                    rightPointer--;
                }
            }
        }
    }

    return result;
};


console.warn(fourSum([1, 0, -1, 0, -2, 2], 0));
console.warn(fourSum([2, 2, 2, 2, 2], 8));
console.warn(fourSum([-5, 5, 4, -3, 0, 0, 4, -2], 4));
console.warn(fourSum([0, 0, 0, 0], 0));
console.warn(fourSum([-3, -1, 0, 2, 4, 5], 0));