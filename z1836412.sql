/*Assignment Number : 5
  Student Name      : Ankita Upadhyay
  Student Z-ID      : Z1836412
*/
SHOW TABLES; /*this SQL Command displays all the tables in the database*/

DESC Customers;/*this SQL  Command dispalys the description of the Customers table*/
  
DESC Employees;/*this SQL Command dispalys the description of the Employees table*/

DESC Offices;/*this SQL Command dispalys the description of the Offices table*/

DESC OrderDetails;/*this SQL Command dispalys rhe description of the OrderDetails table*/

DESC Orders;/*this SQL Command dispalys the description of the Orders table*/

DESC Payments;/*this SQL Command dispalys the description of the Payments table*/

DESC Products;/*this SQL Command dispalys the description of the Products table*/

select  count(customerNumber) 
from Customers;/*this SQL  query dispalys the number of cutomers in Customers table*/

select count(distinct c.customerNumber) 
from Orders o , Customers c 
where o.customerNumber=c.customerNumber 
order by c.customerNumber;/*this SQL  query dispalys the number of customers who have order*/

select count(productCode) 
from Products;/*This SQL  query displays number of products in Products table*/

select * 
from Products LIMIT 10;/*this SQL  query displays details of first 10 products*/

select c.customerNumber,c.customerName,sum(p.amount) 
from Customers c , Payments p 
where c.customerNumber=p.customerNumber 
group by c.customerNumber 
LIMIT 15;/*/*this SQL  query dispalys first 15 total payment amount for each customer who has made a
payment*/

select city 
from Offices 
order by city;/*this SQL  query displays city name where there are Offices listing them in alphabetical orders*/

select count(employeeNumber) 
from Employees;/*this SQL Query displays total number of Employees*/

select count(e.employeeNumber) No_of_Employees_in_each_office,o.officeCode 
from Employees e , Offices o 
where o.officeCode=e.officeCode 
group by o.officeCode;/*this SQL query lists number of employees,officeCode who work in each office*/

select o.orderNumber,c.customerNumber 
from Customers c,Orders o 
where o.customerNumber=c.customerNumber 
group by c.customerNumber 
having count(o.orderNumber)>5;/*this SQL query displays number of  orders for each customer who has placed an
order and lists only those with more than 5 orders. */

select count(orderNumber) 
from Orders 
where status='Shipped';/*this sql query displays total count of orders with Shipped Status*/

select distinct status 
from Orders;/*this SQL query lists all status values for an order*/

select concat(lastName,","," ",firstName) employeeName 
from Employees 
order by lastName desc;/*this SQL query lists all the employee names in the format last, first (for example
Green, Joe) and lists them in reverse alphabetic order of last name. */

select employeeNumber,concat(lastName,","," ",firstName) employeeName 
from Employees 
where officeCode=(select officeCode from Offices where city='London');/*this SQL query lists all of the employees who work in London*/
 
 