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

function getDecimalValue(head: ListNode | null): number {
    let total: number = 0;
    while (head != null) {
        total = (total << 1) | head.val;
        head = head.next;
    }
    return total;
};

const list = {
    val: 1,
    next: {
        val: 0,
        next: {
            val: 1,
            next: null
        }
    }
}

console.warn(getDecimalValue(list));