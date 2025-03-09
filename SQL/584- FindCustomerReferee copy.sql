/****************************************************************************************
    Problem Name: 181. Employees Earning More Than Their Managers
    Problem Link: https://leetcode.com/problems/employees-earning-more-than-their-managers/description/
*****************************************************************************************/

SELECT e1.name as Employee
FROM Employee as e1
INNER JOIN Employee as e2 ON e1.managerId = e2.id
WHERE e1.salary > e2.salary