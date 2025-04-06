/****************************************************************************************
    Problem Name: 12. Integer to Roman
    Problem Link: https://leetcode.com/problems/integer-to-roman/description/
*****************************************************************************************/


var intToRoman = function (num: number): string {
    let romanNumeralsMap: [number, string][] = [[1000, "M"], [900, "CM"], [500, "D"], [400, "CD"], [100, "C"], [90, "XC"], [50, "L"], [40, "XL"], [10, "X"], [9, "IX"], [5, "V"], [4, "IV"], [1, "I"]];

    let currentIndex: number = 0;
    let roman: string = "";

    while (num) {
        if (romanNumeralsMap[currentIndex][0] <= num) {
            num -= romanNumeralsMap[currentIndex][0];
            roman += romanNumeralsMap[currentIndex][1];
        } else {
            currentIndex++;
        }
    }

    return roman;
};

console.warn(intToRoman(3749));
console.warn(intToRoman(58));
console.warn(intToRoman(1994));