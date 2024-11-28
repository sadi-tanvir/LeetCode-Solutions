/****************************************************************************************
    Problem Name: 999. Available Captures for Rook
    Problem Link: https://leetcode.com/problems/available-captures-for-rook/
*****************************************************************************************/


var numRookCaptures = function (board) {
    let rowLength:number = board.length;
    let colLength:number = board[0].length;
    let rowPos:number = -1;
    let colPos:number = -1;
    let count:number = 0;

    for (let row = 0; row < rowLength; row++) {
        for (let col = 0; col < colLength; col++) {
            if (board[row][col] === "R") {
                rowPos = row;
                colPos = col;
            }
        }
    }


    for (let row = rowPos - 1; row >= 0; row--) {
        if (board[row][colPos] === "p") {
            count++;
            break;
        } else if (board[row][colPos] === ".") {
            continue;
        } else {
            break;
        }
    }

    for (let row = rowPos + 1; row < rowLength; row++) {
        if (board[row][colPos] === "p") {
            count++;
            break;
        } else if (board[row][colPos] === ".") {
            continue;
        } else {
            break;
        }
    }

    for (let col = colPos - 1; col >= 0; col--) {
        if (board[rowPos][col] === "p") {
            count++;
            break;
        } else if (board[rowPos][col] === ".") {
            continue;
        } else {
            break;
        }
    }

    for (let col = colPos + 1; col < colLength; col++) {
        if (board[rowPos][col] === "p") {
            count++;
            break;
        } else if (board[rowPos][col] === ".") {
            continue;
        } else {
            break;
        }
    }

    return count;
};

console.log(numRookCaptures([[".", ".", ".", "", ".", ".", ".", "."], [".", ".", ".", "p", ".", ".", ".", "."], [".", ".", ".", "R", ".", ".", ".", "p"], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", "p", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."], [".", ".", ".", ".", ".", ".", ".", "."]]))
console.log(numRookCaptures([[".",".",".",".",".",".","."],[".","p","p","p","p","p",".","."],[".","p","p","B","p","p",".","."],[".","p","B","R","B","p",".","."],[".","p","p","B","p","p",".","."],[".","p","p","p","p","p",".","."],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."]]))
