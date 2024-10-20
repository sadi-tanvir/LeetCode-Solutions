/****************************************************************************************
    Problem Name: 222. Count Complete Tree Nodes
    Problem Link: https://leetcode.com/problems/count-complete-tree-nodes/description/
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



function countNodes(root: TreeNode | null): number {
    if (root === null) return 0;

    let leftSum: number = countNodes(root.left);
    let rightSum: number = countNodes(root.right);

    return leftSum + rightSum + 1;
};

console.warn(countNodes(tree));