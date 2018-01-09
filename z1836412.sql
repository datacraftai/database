/*Assignment Number : 5
  Student Name      : Ankita Upadhyay
  Student Z-ID      : Z1836412
*/

/* 1. SQL Query to list employees working in each city*/
select count(e.employeeNumber)Number_of_Employees_Working,o.city 
from Employees e,Offices o 
where o.officeCode=e.officeCode 
group by o.city 
order by o.city;

/* 2. SQL Query to List each employee first name and last name and the number of customers for each one.*/
select e.firstName,e.lastName,count(c.customerNumber)Number_of_Customers 
from Employees e,Customers c 
where c.salesRepEmployeeNumber=e.employeeNumber 
group by e.employeeNumber 
order by e.firstName;

/* 3. SQL Query to List each employee first name and last name and the first and last name of the person that employee reports to.*/
select e.firstName Employee_First_Name,e.lastName Employee_Last_Name,
e1.firstName Reports_To_First_Name,e1.lastName Reports_To_Last_Name 
from Employees e,Employees e1 
where e.reportsTo=e1.employeeNumber 
order by e.firstName;

/* 4. SQL Query to list the contact person (first name and last name) and the total amount of payments for first 25 customers.*/
select c.contactFirstName,c.contactLastName,sum(p.amount) Total_Amount 
from Customers c, Payments p 
where c.customerNumber=p.customerNumber 
group by c.CustomerNumber  
order by c.customerNumber 
LIMIT 25;

/* 5. SQL Query to list How many customers live in the same city as their sales rep works*/
select count(c.customerNumber)Number_of_Customers_who_live_in_same_city_as_their_Sale_Rep_work  
from Customers c,Employees e, Offices o 
where o.officeCode=e.officeCode 
and o.city=c.city;

/* 6. SQL Query to list How many customers live in the same city as their sales rep works,listing the name of the city and the number of customers.*/
select count(c.customerNumber)Number_of_Customers_who_live_in_same_city_as_their_Sale_Rep_work ,o.city 
from Customers c,Employees e, Offices o 
where o.officeCode=e.officeCode 
and o.city=c.city 
group by c.customerNumber 
order by o.city;

/* 7. SQL Query to list Which customer (just the customer name) has ordered the most expensive product (based on the buyPrice)*/
select c.CustomerName 
from Customers c, Products p , OrderDetails od,Orders o 
where od.productCode=p.productCode 
and od.orderNumber=o.orderNumber 
and o.customerNumber=c.customerNumber 
and p.buyPrice=
(select MAX(buyPrice) from Products);

/* 8. SQL Query to list Which customer has made the largest payment? list just the customer name.*/
select c.customerName 
from Customers c, Payments p 
where c.customerNumber=p.customerNumber 
and p.amount=
(select MAX(amount) from Payments);

/* 9. i) SQL Query to List all of the product descriptions for products from Min LinDiecast and Exoto Designs */
select productDescription 
from Products 
where productVendor='Min Lin Diecast' 
OR productVendor='Exoto Designs';

/* 9. ii) SQL Query to List all of the product descriptions for products from Min LinDiecast and Exoto Designs */
select productDescription 
from Products 
where productVendor 
IN ('Min Lin Diecast','Exoto Designs');


/*Extra credits 1. SQL Query to list the order number, the customer name and all of the product names on that order in ascending order of customer name for first 10 orders*/
select o.orderNumber,c.customerName,group_concat(distinct p.productName) 
from Orders o,Customers c,Products p ,OrderDetails od  
where o.customerNumber=c.customerNumber  
and od.productCode=p.productCode   
and od.orderNumber=o.orderNumber 
group by o.orderNumber  
order by customerName  
LIMIT 10;

/*Extra credits 2. SQL Query to list the average dollar amount for each order*/
select o.orderNumber,avg(p.amount) 
from Payments p,Orders o,Customers c 
where c.customerNumber=o.customerNumber 
and o.customerNumber=p.customerNumber 
group by o.orderNumber 
order by o.orderNumber;


