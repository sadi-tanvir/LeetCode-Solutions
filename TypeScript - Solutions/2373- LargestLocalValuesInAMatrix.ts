/****************************************************************************************
    Problem Name: 2373. Largest Local Values in a Matrix
    Problem Link: https://leetcode.com/problems/largest-local-values-in-a-matrix/description/
*****************************************************************************************/


function largestLocal(grid: number[][]): number[][] {
    const n: number = grid.length;
    let result: number[][] = Array(n - 2).fill([]).map(() => Array(n - 2).fill(0));
    for (let row: number = 0; row < n - 2; row++) {
        for (let col: number = 0; col < n - 2; col++) {
            let maxVal: number = -Infinity;
            for (let rowF: number = row; rowF <= row + 2; rowF++) {
                for (let colF: number = col; colF <= col + 2; colF++) {
                    maxVal = Math.max(grid[rowF][colF], maxVal);
                }
            }
            result[row][col] = maxVal;
        }
    }

    return result;
};
console.warn(largestLocal([[9, 9, 8, 1], [5, 6, 2, 6], [8, 2, 6, 4], [6, 2, 2, 2]]));
console.warn(largestLocal([[1, 1, 1, 1, 1], [1, 1, 1, 1, 1], [1, 1, 2, 1, 1], [1, 1, 1, 1, 1], [1, 1, 1, 1, 1]]));