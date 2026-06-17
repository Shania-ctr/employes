CREATE or REPLACE view v_manager as SELECT departments.dept_no as Num_dep , departments.dept_name as Nom_dep , 
employees.first_name as Nom , employees.last_name as Prenom , dept_manager.to_date as daty 
FROM departments JOIN dept_manager ON departments.dept_no = dept_manager.dept_no JOIN employees ON dept_manager.emp_no = employees.emp_no;
CREATE OR REPLACE view v_nom_manager as SELECT * from v_manager WHERE daty = '9999-01-01' GROUP BY `Num_dep`;
create or replace view v_employe as SELECT dept_emp.dept_no as Num_dep, dept_emp.emp_no as Num_emp, 
employees.first_name as Nom_emp , employees.last_name as Prenom_emp , employees.birth_date as Naissance, 
TIMESTAMPDIFF(YEAR , employees.birth_date , CURDATE()) as age ,
salaries.salary as prix_salaire , salaries.from_date as debut_salaire , salaries.to_date as fin_salaire ,
titles.title as emploi , titles.from_date as debut_emploi , titles.to_date as fin_emploi 
from employees join dept_emp on dept_emp.emp_no = employees.emp_no
join salaries on salaries.emp_no = dept_emp.emp_no
join titles on salaries.emp_no = titles.emp_no;
select * from v_employe;
SELECT * FROM v_employe where Num_emp = '10012'group by debut_salaire;
SELECT * FROM v_employe where Num_emp = '10012'group by emploi;
create or replace view v_liste_employee as SELECT * from v_employe where `Num_dep` = 'd005' group by `Num_emp`;
SELECT count(`Num_emp`) from v_liste_employee;
SELECT count(dept_no) FROM dept_emp where  dept_no = 'd005';
