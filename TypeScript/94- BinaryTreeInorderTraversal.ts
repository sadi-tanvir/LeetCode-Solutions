/****************************************************************************************
    Problem Name: 94. Binary Tree Inorder Traversal
    Problem Link: https://leetcode.com/problems/binary-tree-inorder-traversal/description/
*****************************************************************************************/


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

function inorderTraversal(root: TreeNode | null): number[] {
    let res: number[] = [];
    function inOrder(root: TreeNode | null) {
        if (root === null) return;
        inOrder(root.left);
        res.push(root.val);
        inOrder(root.right);
    }
    inOrder(root);
    return res;
};

// inorderTraversal([1, null, 2, 3]);
// inorderTraversal([1, 2, 3, 4, 5, null, 8, null, null, 6, 7, 9]);