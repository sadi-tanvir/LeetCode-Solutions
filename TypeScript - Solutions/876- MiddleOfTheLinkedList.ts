/****************************************************************************************
    Problem Name: 1290. Convert Binary Number in a Linked List to Integer
    Problem Link: https://leetcode.com/problems/convert-binary-number-in-a-linked-list-to-integer/description/
*****************************************************************************************/


class ListNode {
    val: number
    next: ListNode | null
    constructor(val?: number, next?: ListNode | null) {
        this.val = (val === undefined ? 0 : val)
        this.next = (next === undefined ? null : next)
    }
};

function middleNode(head: ListNode): ListNode | null {
    let slowPointer:ListNode  | null= head;
    let fastPointer:ListNode  | null= head;

    while (fastPointer != null && fastPointer.next != null) {
        slowPointer = slowPointer.next;
        fastPointer = fastPointer.next.next;
    };

    return slowPointer;
};

const list = {
    val: 1,
    next: {
        val: 2,
        next: {
            val: 3,
            next: {
                val: 4,
                next: {
                    val: 5,
                    next: {
                        val: 6,
                        next: null
                    }
                }
            }
        }
    }
};

console.warn(middleNode(list));