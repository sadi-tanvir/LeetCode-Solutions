from typing import List

class Solution:
    def numRookCaptures(self, board: List[List[str]]) -> int:
            rowLength = len(board)
            colLength = len(board[0])
            rowPos = -1
            colPos = -1
            count = 0

            for row in range(rowLength):
                for col in range(colLength):
                    if board[row][col] == "R":
                        rowPos = row
                        colPos = col
        

            for row in range(rowPos -1, -1, -1):
                if board[row][colPos] == "p":
                    count += 1
                    break
                elif board[row][colPos] == ".":
                    continue
                else: break
        
            for row in range(rowPos + 1, rowLength):
                 if board[row][colPos] == "p":
                    count += 1
                    break
                 elif board[row][colPos] == ".":
                    continue
                 else: break

            for col in range(colPos -1, -1, -1):
                if board[rowPos][col] == "p":
                    count += 1
                    break
                elif board[rowPos][col] == ".":
                   continue
                else: break


            for col in range(colPos + 1, colLength):
                if board[rowPos][col] == "p":
                    count += 1
                    break
                elif board[rowPos][col] == ".":
                    continue
                else: break

          

            return count
        
        
        
board = [
    [".", ".", ".", ".", ".", ".", ".", "."],
    [".", ".", ".", "p", ".", ".", ".", "."],
    [".", ".", ".", "R", ".", ".", ".", "p"],
    [".", ".", ".", ".", ".", ".", ".", "."],
    [".", ".", ".", ".", ".", ".", ".", "."],
    [".", ".", ".", "p", ".", ".", ".", "."],
    [".", ".", ".", ".", ".", ".", ".", "."],
    [".", ".", ".", ".", ".", ".", ".", "."],
]

solution = Solution()
print(solution.numRookCaptures(board))