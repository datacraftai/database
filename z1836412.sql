/*Assignment Number : 7
  Student Name      : Ankita Upadhyay
  Student Z-ID      : Z1836412
*/

/*2. creating a table owner with an owner id and a name. 
Owner id is an auto-increment primary key*/
create table Owner 
(ownerID int NOT NULL AUTO_INCREMENT , 
ownerName varchar(255) NOT NULL , 
PRIMARY KEY (ownerID));

/*3. inserting at least 5 records in this table (inserted 9 records)*/
INSERT INTO Owner 
(ownerName) 
Values 
('Diana'),('Ankita'),('Piyush'),
('Amit'),('Ekta'),('Harold'),
('Gwen'),('Benny'),('John');


/*4. select * on Owner table to show all the records*/
Select * from Owner;

/*5. creating a table called pet with a pet id (auto-increment
primary key), pet name and owner-id which is a foreign key
into the owner table*/
create table Pet 
(petID int NOT NULL AUTO_INCREMENT , 
petName varchar(255) NOT NULL, 
ownerID int NOT NULL , 
PRIMARY KEY (PETID),
FOREIGN KEY (ownerID) 
REFERENCES Owner(ownerID));
 
/*6.inserting at least 5 records in this table, with at least two
pets owned by the same owner(inserted 11 records)*/ 
INSERT INTO Pet 
(petName,ownerID) 
Values ('Tommy',1),('Fluffy',2),('Claws',2),
('Buffy',3),('Fang',3),('Whistler',4),
('Browser',5),('Chirpy',6),('Slim',7),
('Abby',8),('Arrow',9);

/*7. selecting records from Pet table to show all the records*/
select * from Pet;

/*8. adding a column to the pet table for type of pet (for example:
dog, cat, or fish)*/
ALTER TABLE Pet ADD petType varchar(50);


/*9. updating several rows to add the pet type*/
UPDATE Pet SET petType='dog' where petID IN (1,4,5,7);
UPDATE Pet SET petType='cat' where petID IN (2,3,10);
UPDATE Pet SET petType='bird' where petID IN (6,8,9);
UPDATE Pet SET petType='fish' where petID=11;

/*10. selecting records from Pet table to show all the records*/
select * from Pet;

/*11. creating a view that will list each owner with their
pet, just the names*/
CREATE VIEW PetOwner 
AS select o.ownerName, p.petName 
from Owner o, Pet p 
where o.ownerID=p.ownerID;

/*12. selecting on this view to show all the records*/
select * from PetOwner;

/*1. droping all of the tables/views created above*/
Drop table Pet,Owner;
Drop view PetOwner;



