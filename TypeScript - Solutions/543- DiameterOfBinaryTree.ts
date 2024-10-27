/****************************************************************************************
    Problem Name: 543. Diameter of Binary Tree
    Problem Link: https://leetcode.com/problems/diameter-of-binary-tree/description/
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
    val: 1,
    left: {
        val: 2,
        left: {
            val: 4,
            left: null,
            right: null
        },
        right: {
            val: 5,
            left: null,
            right: null
        }
    },
    right: {
        val: 3,
        left: null,
        right: null
    }
};

function diameterOfBinaryTree(root: TreeNode | null): number {
    let maxDiameter:number = 0;

    function heightOfTree(node) {
        if (node === null) {
            return 0;
        }

        let leftHeight:number = heightOfTree(node.left);
        let rightHeight:number = heightOfTree(node.right);

        maxDiameter = Math.max(maxDiameter, leftHeight + rightHeight);

        return Math.max(leftHeight, rightHeight) + 1;
    }

    heightOfTree(root);

    return maxDiameter;
};

console.warn(diameterOfBinaryTree(tree));