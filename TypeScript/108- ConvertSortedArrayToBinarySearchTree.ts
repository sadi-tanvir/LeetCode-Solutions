/***************************************************************************************
    Problem Name: 108 Convert Sorted Array to Binary Search Tree
    Problem Link: https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/description
*****************************************************************************************/

class TreeNode {
    val: number
    left: TreeNode | null
    right: TreeNode | null
    constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
        this.val = (val === undefined ? 0 : val)
        this.left = (left === undefined ? null : left)
        this.right = (right === undefined ? null : right)
    }
}

let nums = [-10, -3, 0, 5, 9]


function sortedArrayToBST(nums: number[]): TreeNode | null {
    return sortArray(nums, 0, nums.length - 1);
};

function sortArray(nums: number[], left: number, right: number): TreeNode | null {
    let mid: number = Math.floor((left + right) / 2);

    let newNode: TreeNode = new TreeNode(nums[mid]);
    if (left > right) {
        return null;
    }

    newNode.left = sortArray(nums, left, mid - 1);
    newNode.right = sortArray(nums, mid + 1, right);

    return newNode;
}

console.warn(sortedArrayToBST(nums));