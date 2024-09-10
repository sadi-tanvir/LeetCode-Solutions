/****************************************************************************************
    Problem Name: 103. Binary Tree Zigzag Level Order Traversal
    Problem Link: https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/description/
*****************************************************************************************/


class TreeNode {
    val: number;
    left: TreeNode | null;
    right: TreeNode | null;

    constructor(val = 0, left = null, right = null) {
        this.val = val;
        this.left = left;
        this.right = right;
    };
}


const tree = {
    val: 2,
    left: {
        val: 2,
        left: {
            val: 2,
            left: null,
            right: null
        },
        right: {
            val: 2,
            left: null,
            right: null
        }
    },
    right: {
        val: 2,
        left: null,
        right: null
    }
}


function isUnivalTree(root: TreeNode | null): boolean {
    if (root === null) return true;
    let queue: TreeNode[] = [root];
    let universal: number = root.val;
    while (queue.length) {
        let node: TreeNode | null = queue.shift();
        if (node?.val !== universal) return false;
        if (node?.left) queue.push(node.left);
        if (node?.right) queue.push(node.right);
    };

    return true;
};

console.warn(isUnivalTree(tree));