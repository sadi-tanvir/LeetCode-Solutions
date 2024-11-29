/****************************************************************************************
    Problem Name: 209. Minimum Size Subarray Sum
    Problem Link: https://leetcode.com/problems/minimum-size-subarray-sum/description/
*****************************************************************************************/


function minSubArrayLen(target: number, nums: number[]): number {
    let n: number = nums.length,
        minLen: number = n + 2,
        left: number = 0,
        right: number = 0,
        currentSum: number = nums[left];

    while ((left < n) && (right < n)) {
        if (currentSum < target) {
            right++;
            currentSum += nums[right];
        } else if (currentSum >= target) {
            minLen = Math.min(minLen, right - left + 1);
            left++;
            currentSum -= nums[left - 1];
        }
    }

    return minLen == n + 2 ? 0 : minLen;
};

console.warn(minSubArrayLen(7, [2, 3, 1, 2, 4, 3])); // 2
console.warn(minSubArrayLen(4, [1, 4, 4])); // 1
console.warn(minSubArrayLen(11, [1, 1, 1, 1, 1, 1, 1, 1])); // 0
console.warn(minSubArrayLen(11, [1, 2, 3, 4, 5])); // 3
console.warn(minSubArrayLen(6, [10, 2, 3])); // 1
console.warn(minSubArrayLen(7, [1, 1, 1, 1, 7])); // 1