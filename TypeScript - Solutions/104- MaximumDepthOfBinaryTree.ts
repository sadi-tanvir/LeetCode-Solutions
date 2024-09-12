/****************************************************************************************
    Problem Name: 104. Maximum Depth of Binary Tree
    Problem Link: https://leetcode.com/problems/maximum-depth-of-binary-tree/description/
*****************************************************************************************/


const tree = {
    val: 3,
    left: {
        val: 9,
        left: null,
        right: null
    },
    right: {
        val: 20,
        left: {
            val: 15,
            left: null,
            right: null
        },
        right: {
            val: 7,
            left: null,
            right: null
        }
    }
};

class TreeNode {
    val: number;
    left: TreeNode | null;
    right: TreeNode | null;
    constructor(val = 0, left = null, right = null) {
        this.val = val;
        this.left = left;
        this.right = right;
    }
}


function maxDepth(root: TreeNode | null): number {
    if (root === null) return 0;

    const leftDepth = maxDepth(root.left);
    const rightDepht = maxDepth(root.right);

    return Math.max(leftDepth, rightDepht) + 1;
};

console.warn(maxDepth(tree));