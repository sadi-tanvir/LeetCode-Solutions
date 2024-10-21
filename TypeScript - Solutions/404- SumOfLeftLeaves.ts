/****************************************************************************************
    Problem Name: 404. Sum of Left Leaves
    Problem Link: https://leetcode.com/problems/sum-of-left-leaves/description/
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


function sumOfLeftLeaves(root: TreeNode | null): number {
    return calculate(root, false);
};

function calculate(root2: TreeNode | null, isLeft: boolean): number {
    if (root2 == null) return 0;

    let leftSum = calculate(root2.left, true);
    let rightSum = calculate(root2.right, false);
    return leftSum + rightSum + (isLeft && (root2.left == null) && (root2.right == null) ? root2.val : 0);
}

console.warn(sumOfLeftLeaves(tree));