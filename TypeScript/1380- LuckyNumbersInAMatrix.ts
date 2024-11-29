/****************************************************************************************
    Problem Name: 1380. Lucky Numbers in a Matrix
    Problem Link: https://leetcode.com/problems/lucky-numbers-in-a-matrix/description/
*****************************************************************************************/


function luckyNumbers(matrix: number[][]): number[] {
    let rowLength:number = matrix.length;
    let colLength:number = matrix[0].length;
    let targetColumn:number = -1;
    let minElem:number = Number.MAX_VALUE;
    let status:boolean = false;
    for (let row = 0; row < rowLength; row++) {
        targetColumn = -1;
        minElem = Number.MAX_VALUE;
        status = false;
        for (let col = 0; col < colLength; col++) {
            if (minElem > matrix[row][col]) {
                minElem = matrix[row][col];
                targetColumn = col;
            }
        }

        for (let row2 = 0; row2 < rowLength; row2++) {
            if (matrix[row2][targetColumn] <= minElem) {
                status = true;
            } else {
                status = false;
                break;
            }

            if(row2 === rowLength -1 && status){
                return [minElem];
            }
        }
    }

    return [];
};

console.log(luckyNumbers([[3,7,8],[9,11,13],[15,16,17]]))