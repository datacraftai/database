-- This is a script to drop the space doctors tables from class
-- The following line prevents foreign keys from preventing the drop
SET foreign_key_checks = 0;

DROP TABLE Person;
DROP TABLE Planet;
DROP TABLE Disease;
DROP TABLE Treatment;
DROP TABLE Doctor;
DROP TABLE CrewMember;
DROP TABLE TreatmentHistory;
DROP TABLE Symptom;
DROP TABLE SideEffect;
DROP TABLE TreatmentForDisease;
DROP TABLE DiseaseOnPlanet;
DROP TABLE CrewVisitsPlanet;

-- This turns foreign key checks back on after done
SET foreign_key_checks = 1;

