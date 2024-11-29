/****************************************************************************************
    Problem Name: 20. Valid Parentheses
    Problem Link: https://leetcode.com/problems/valid-parentheses/description/
*****************************************************************************************/


function isValid(s: string): boolean {
    const brackets: { [key: string]: string } = {
        "(": ")",
        "[": "]",
        "{": "}"
    };
    let index: number = 0;

    while (index >= 0 || s.length > 0) {
        if (index > s.length) {
            break;
        }
        if (brackets[s[index]] && brackets[s[index]] === s[index + 1]) {
            s = s.slice(0, index) + s.slice(index + 2);
            index--;
        } else {
            index++;
        }
    }

    return s.length === 0;
};

console.warn(isValid("()"));
console.warn(isValid("[](){}"));
console.warn(isValid("{[]}"));
console.warn(isValid("(]"));
console.warn(isValid("]"));