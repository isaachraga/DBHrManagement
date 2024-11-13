# DBHrManagement
Hr Management
[Project Proposal](https://docs.google.com/document/d/1fuoUMl60-KVm-yIVfO4_GgGQKWO4_hE_vOUFD2FgrOY/edit?usp=sharing)

SQL Queries

Adding new emmployees

Insert New Employee:
INSERT INTO Employee (employee_id, first_name, last_name, department_id, hire_date, position)
VALUES (101, 'John', 'Smith', 2, '2024-01-15', 'Software Engineer');

Select Employee:
SELECT * FROM Employee WHERE employee_id = 101;

Update Employee:
UPDATE Employee
SET first_name = 'Jonathan', position = 'Senior Software Engineer'
WHERE employee_id = 101;

Delete Employee:
DELETE FROM Employee WHERE employee_id = 101;

Administering Raises/Bonuses

Insert Raise/Bonus:
INSERT INTO Salary (employee_id, base_salary, bonus, effective_date)
VALUES (101, 75000, 5000, '2024-02-01');

Select Salary Information:
SELECT * FROM Salary WHERE employee_id = 101;

Update Raise/Bonus:
UPDATE Salary
SET base_salary = 80000, bonus = 6000
WHERE employee_id = 101 AND effective_date = '2024-02-01';

Delete Salary Record:
DELETE FROM Salary WHERE employee_id = 101 AND effective_date = '2024-02-01';

Switching Departments

Insert New Department for Employee:
INSERT INTO Employee (employee_id, department_id)
VALUES (101, 3);

Select Employee Department Information:
SELECT department_id FROM Employee WHERE employee_id = 101;

Update Department Assignment:
UPDATE Employee
SET department_id = 4
WHERE employee_id = 101;

Entering Timecard Information

Insert Timecard Entry:
INSERT INTO Timecard (timecard_id, employee_id, date, hours_worked)
VALUES (1, 101, '2024-03-01', 8);

Select Timecard Entry:
SELECT * FROM Timecard WHERE employee_id = 101 AND date = '2024-03-01';

Update Timecard Entry:
UPDATE Timecard
SET hours_worked = 9
WHERE timecard_id = 1;

Delete Timecard Entry:
DELETE FROM Timecard WHERE timecard_id = 1;

Citing Policy Infractions

Insert Policy Infraction:
INSERT INTO PolicyInfraction (infraction_id, employee_id, date, infraction_type, penalty)
VALUES (1, 101, '2024-04-10', 'Late Arrival', 'Warning');

Select Policy Infraction:
SELECT * FROM PolicyInfraction WHERE employee_id = 101;

Update Policy Infraction:
UPDATE PolicyInfraction
SET penalty = 'Final Warning'
WHERE infraction_id = 1;

Delete Policy Infraction:
DELETE FROM PolicyInfraction WHERE infraction_id = 1;
