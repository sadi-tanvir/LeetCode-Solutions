/****************************************************************************************
    Problem Name: 145. Binary Tree Postorder Traversal
    Problem Link: https://leetcode.com/problems/binary-tree-postorder-traversal/description/
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

function postorderTraversal(root: TreeNode | null): number[] {
    let res: number[] = [];

    function postOrders(root: TreeNode | null) {
        if (root === null) return;
        postOrders(root.left);
        postOrders(root.right);
        res.push(root.val);
    }
    postOrders(root);

    return res;
};

// console.warn(postorderTraversal([1, null, 2, 3]));
// console.warn(postorderTraversal([1, 2, 3, 4, 5, null, 8, null, null, 6, 7, 9]));