/****************************************************************************************
    Problem Name: 144. Binary Tree Preorder Traversal
    Problem Link: https://leetcode.com/problems/binary-tree-preorder-traversal/description/
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

function preorderTraversal(root: TreeNode | null): number[] {
    let res: number[] = [];
    preOrder(root, res);
    return res;
};

function preOrder(root: TreeNode | null, res: number[]) {
    if (root === null) return;
    res.push(root.val);
    preOrder(root.left, res);
    preOrder(root.right, res);
}

// console.warn(preorderTraversal([1, null, 2, 3]));
// console.warn(preorderTraversal([1, 2, 3, 4, 5, null, 8, null, null, 6, 7, 9]));