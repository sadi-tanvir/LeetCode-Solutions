/****************************************************************************************
    Problem Name: 48. Rotate Image
    Problem Link: https://leetcode.com/problems/rotate-image/description/
*****************************************************************************************/


function rotate(matrix: number[][]): void {
    let n: number = matrix.length;

    for (let i: number = 0; i < n; i++) {
        for (let j: number = i; j < n; j++) {
            let temp: number = matrix[i][j];
            matrix[i][j] = matrix[j][i];
            matrix[j][i] = temp;
        }
    }

    for (let i: number = 0; i < n; i++) {
        matrix[i].reverse();
    }
};

console.warn(rotate([[1, 2, 3], [4, 5, 6], [7, 8, 9]]));