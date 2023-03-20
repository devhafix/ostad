/*
Assignment Name: SQL Commands Assignment

Description:
In this assignment, you will be working with a fictional database of a company named "XYZ Corp." The database contains two tables, employees and departments. Your task is to write SQL commands to retrieve and manipulate data from these tables.

Instructions:
Use the employees table to answer the following questions:
a. Write a query to select all columns and rows from the employees table.
b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.
c. Write a query to calculate the average salary of all employees.
d. Write a query to count the number of employees who work in the "Marketing" department.
e. Write a query to update the salary column of the employee with an id of 1001 to 60000.
f. Write a query to delete all employees whose salary is less than 30000.

Use the departments table to answer the following questions:
a. Write a query to select all columns and rows from the departments table.
b. Write a query to select only the name and manager columns of the "Finance" department.
c. Write a query to calculate the total number of employees in each department.
d. Write a query to insert a new department called "Research" with a manager named "John Doe".

Deliverables:
A text file containing all SQL commands written to answer the above questions.
A brief explanation of each SQL command and its purpose.

Note: You can assume that both tables have the following columns:
employees: id, name, age, salary, department_id
departments: id, name, manager
*/

-- Employees
-- A. To select all columns and rows from the employees table:
SELECT * FROM employees;
-- Explanation: This query selects all the columns and all rows from the employees table.

-- B. To select only the name and salary columns of all employees with a salary greater than 50000:
SELECT name, salary FROM employees WHERE salary > 50000;
-- Explanation: This query selects only the name and salary columns from the employees table where the salary is greater than 50000.

-- C. To calculate the average salary of all employees:
SELECT AVG(salary) FROM employees;
-- Explanation: This query calculates the average salary of all employees from the employees table.

-- D. To count the number of employees who work in the "Marketing" department:
SELECT COUNT(*) FROM employees WHERE department_id = (SELECT id FROM departments WHERE name = 'Marketing');
-- Explanation: This query first selects the department id of the "Marketing" department from the departments table and then counts the number of employees in the employees table with that department id.

-- E. To update the salary column of the employee with an id of 1001 to 60000:
UPDATE employees SET salary = 60000 WHERE id = 1001;
-- Explanation: This query updates the salary column of the employee with an id of 1001 to 60000 in the employees table.

-- F. To delete all employees whose salary is less than 30000:
DELETE FROM employees WHERE salary < 30000;
-- Explanation: This query deletes all rows from the employees table where the salary is less than 30000.

-- Departments
-- A. To select all columns and rows from the departments table:
SELECT * FROM departments;
-- Explanation: This query selects all columns and all rows from the departments table.

-- B. To select only the name and manager columns of the "Finance" department:
SELECT name, manager FROM departments WHERE name = 'Finance';
-- Explanation: This query selects only the name and manager columns from the departments table where the name is "Finance".

-- C. To calculate the total number of employees in each department:
SELECT departments.name, COUNT(*) 
FROM employees 
JOIN departments ON employees.department_id = departments.id 
GROUP BY departments.name;
-- Explanation: This query joins the employees and departments tables on department_id and counts the number of employees in each department using the GROUP BY clause.

-- D. To insert a new department called "Research" with a manager named "John Doe":
INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
-- Explanation: This query inserts a new row into the departments table with the name "Research" and manager "John Doe".
