/****************************************************************************************
    Problem Name: 38. Count and Say
    Problem Link: https://leetcode.com/problems/count-and-say/description/
*****************************************************************************************/


function countAndSay(n: number): string {
    let sequence: string = "0";
    sequence = generateSequence(n, sequence);
    return sequence;
};

var generateSequence = function (n: number, sequence: string): string {
    if (n === 0) return sequence;
    sequence = generateNextTerm(sequence);
    return generateSequence(n - 1, sequence);
};

function generateNextTerm(sequence: string): string {
    if (sequence === "0") {
        return "1";
    }
    let nextSequence: string = "";
    let currentChar: string = "";
    let charCount: number = 0;

    for (let i = 0; i < sequence.length; i++) {
        if (currentChar === sequence[i]) {
            charCount++;
        } else {
            if (charCount > 0) {
                nextSequence += charCount + currentChar;
            }
            currentChar = sequence[i];
            charCount = 1;
        }
    }

    if (charCount > 0) {
        nextSequence += charCount + currentChar;
    }

    return nextSequence;
}

console.warn(countAndSay(4));
console.warn(countAndSay(1));