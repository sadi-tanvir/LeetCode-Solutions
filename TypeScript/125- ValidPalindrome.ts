/****************************************************************************************
    Problem Name: 125. Valid Palindrome
    Problem Link: https://leetcode.com/problems/valid-palindrome
*****************************************************************************************/


function isPalindrome(s: string): boolean {
    let string: string[] = s.replace(/[^a-zA-Z0-9]/g, "").toLowerCase().split("");

    let start: number = 0;
    let end: number = string.length - 1;

    while (start < end) {
        if (string[start] !== string[end]) {
            return false;
        }
        start++;
        end--;
    }

    return true;
};

console.log(isPalindrome("A man, a plan, a canal: Panama"));