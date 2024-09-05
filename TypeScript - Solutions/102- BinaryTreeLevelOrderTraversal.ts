/****************************************************************************************
    Problem Name: 102. Binary Tree Level Order Traversal
    Problem Link: https://leetcode.com/problems/binary-tree-level-order-traversal/
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

function levelOrder(root: TreeNode | null): number[][] {
    if (root === null) return [];
    let res: number[][] = [];
    let queue: (TreeNode | null)[] = [];
    queue.push(root);
    queue.push(null);
    res.push([]);

    while (queue.length) {
        let currentNode: TreeNode | null = queue.shift();
        if (currentNode === null) {
            if (queue.length === 0) break;
            else {
                queue.push(null);
                res.push([]);
            }
        } else {
            res[res.length - 1].push(currentNode.val);
            if (currentNode.left) queue.push(currentNode.left);

            if (currentNode.right) queue.push(currentNode.right);
        }
    }

    return res;
};

console.warn(levelOrder(tree));