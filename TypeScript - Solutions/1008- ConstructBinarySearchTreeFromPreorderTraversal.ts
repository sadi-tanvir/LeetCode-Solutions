/****************************************************************************************
    Problem Name: 1008. Construct Binary Search Tree from Preorder Traversal
    Problem Link: https://leetcode.com/problems/construct-binary-search-tree-from-preorder-traversal/
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

function bstFromPreorder(preorder: number[]): TreeNode | null {
    let root: TreeNode | null = null

    for (let i = 0; i < preorder.length; i++) {
        const newNode: TreeNode = new TreeNode(preorder[i]);
        root = addTree(root, newNode);
    }

    return root;
};

function addTree(root: TreeNode | null, newNode: TreeNode): TreeNode {
    if (root === null) {
        root = newNode;
        return root;
    };

    if (root.val < newNode.val) {
        if (root.right === null) {
            root.right = newNode;
        } else {
            addTree(root.right, newNode);
        }
    } else {
        if (root.left === null) {
            root.left = newNode;
        } else {
            addTree(root.left, newNode);
        }
    }

    return root;
};


console.log(bstFromPreorder([8,5,1,7,10,12]))