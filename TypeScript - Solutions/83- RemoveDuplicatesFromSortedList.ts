/****************************************************************************************
    Problem Name: 12. Integer to Roman
    Problem Link: https://leetcode.com/problems/integer-to-roman/description/
*****************************************************************************************/


const list = {
    val: 1,
    next: {
        val: 1,
        next: {
            val: 2,
            next: {
                val: 3,
                next: {
                    val: 3,
                    next: null
                }
            }
        }
    }
};

class ListNode {
    val: number;
    next: ListNode | null;
    constructor(val?: number, next?: ListNode | null) {
        this.val = (val === undefined ? 0 : val);
        this.next = (next === undefined ? null : next);
    }
}

function deleteDuplicates(head: ListNode | null): ListNode | null {
    let uniqueArr: number[] = [];
    let current: ListNode | null = null;

    while (head) {
        if (!uniqueArr.includes(head.val)) {
            uniqueArr.push(head.val);
        }
        head = head.next;
    }

    for (let i: number = 0; i < uniqueArr.length; i++) {
        let newNode = new ListNode(uniqueArr[i]);
        if (!current) {
            head = newNode;
            current = newNode;
        } else {
            current.next = newNode;
            current = current.next;
        }
    }

    return head;
}


// console.log(climbStairs(2));
// console.log(climbStairs(3));
console.log(deleteDuplicates(list));