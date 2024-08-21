/****************************************************************************************
    Problem Name: 23. Merge k Sorted Lists
    Problem Link: https://leetcode.com/problems/merge-k-sorted-lists/description/
*****************************************************************************************/

const list1 = {
    val: 1,
    next: {
        val: 4,
        next: {
            val: 5,
            next: null
        }
    }
}

const list2 = {
    val: 1,
    next: {
        val: 3,
        next: {
            val: 4,
            next: null
        }
    }
}

const list3 = {
    val: 2,
    next: {
        val: 6,
        next: null
    }
}

function ListNode(val, next) {
    this.val = (val === undefined ? 0 : val)
    this.next = (next === undefined ? null : next)
}

function mergeKLists(lists: Array<ListNode | null>): ListNode | null {
    let listArr: number[] = [];
    let sortedList: ListNode | null = null;
    let current: ListNode | null = sortedList;

    for (let i = 0; i < lists.length; i++) {
        while (lists[i]) {
            listArr.push(lists[i].val);
            lists[i] = lists[i].next;
        }
    }

    listArr.sort((a, b) => a - b)

    for (let i = 0; i < listArr.length; i++) {
        let newNode = new ListNode(listArr[i]);
        if (!sortedList) {
            sortedList = newNode;
            current = newNode;
        } else {
            current.next = newNode;
            current = current.next;
        };
    }

    return sortedList;
};

console.warn(mergeKLists([list1, list2, list3]));