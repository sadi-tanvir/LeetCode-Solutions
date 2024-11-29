/****************************************************************************************
    Problem Name: 167. Two Sum II - Input Array Is Sorted
    Problem Link: https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/description/
*****************************************************************************************/


var twoSum = function (numbers: number[], target: number) {
    let left: number = 0;
    let right: number = numbers.length - 1;

    while (left < right) {
        if ((numbers[left] + numbers[right]) === target) {
            return [left + 1, right + 1]
        } else if ((numbers[left] + numbers[right]) > target) {
            right--;
        } else {
            left++;
        }
    }
};

console.warn(twoSum([2, 7, 11, 15], 9));
console.warn(twoSum([2, 3, 4], 6));
console.warn(twoSum([-1, 0], -1));