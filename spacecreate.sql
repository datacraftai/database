-- This is a script to add the space doctors tables from class
CREATE TABLE Person(people_id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(255), birthdate DATE);
CREATE TABLE Planet(planet_id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(255), loc VARCHAR(255));
CREATE TABLE Disease(name VARCHAR(255) PRIMARY KEY, descr VARCHAR(255));
CREATE TABLE Treatment(treatment_id INT PRIMARY KEY AUTO_INCREMENT, descr VARCHAR(255));
CREATE TABLE Doctor(people_id INT NOT NULL, degree VARCHAR(32) not null, school varchar(32) not null, degree_date DATE not null, specialty VARCHAR(20), PRIMARY KEY(people_id), FOREIGN KEY (people_id) REFERENCES Person(people_id));
CREATE TABLE CrewMember(people_id INT NOT NULL, position VARCHAR(20) Not NULL, salary DECIMAL(11,2) NOT NULL, PRIMARY KEY(people_id), FOREIGN KEY (people_id) REFERENCES Person(people_id));
CREATE TABLE TreatmentHistory(date_contracted DATETIME, crew_id INT NOT NULL, doctor INT NOT NULL, disease_id VARCHAR(255), treatment_id INT NOT NULL,   PRIMARY KEY(date_contracted, crew_id), FOREIGN KEY (crew_id) REFERENCES CrewMember(people_id), FOREIGN KEY (doctor) REFERENCES Doctor(people_id), FOREIGN KEY (disease_id) REFERENCES Disease(name), FOREIGN KEY (treatment_id) REFERENCES Treatment(treatment_id));
CREATE TABLE Symptom(disease_name VARCHAR(255) NOT NULL, symptom_num INT NOT NULL, descr VARCHAR(255), PRIMARY KEY(disease_name, symptom_num), FOREIGN KEY (disease_name) REFERENCES Disease(name));
CREATE TABLE SideEffect(treatment_id INT NOT NULL, se_num INT NOT NULL, descr VARCHAR(255), PRIMARY KEY(treatment_id, se_num), FOREIGN KEY (treatment_id) REFERENCES Treatment(treatment_id));
CREATE TABLE TreatmentForDisease(treatment_id INT, disease_name VARCHAR(255), recommendation_priority INT, PRIMARY KEY (treatment_id, disease_name), FOREIGN KEY(treatment_id) REFERENCES Treatment(treatment_id), FOREIGN KEY(disease_name) REFERENCES Disease(name));
CREATE TABLE DiseaseOnPlanet(disease_name VARCHAR(255), planet_id INT, date_discovered DATE, discoverer_name VARCHAR(255), PRIMARY KEY(disease_name, planet_id), FOREIGN KEY (disease_name) REFERENCES Disease(name), FOREIGN KEY(planet_id) REFERENCES Planet(planet_id));
CREATE TABLE CrewVisitsPlanet(crew_id INT, planet_id INT, visitdate DATETIME, PRIMARY KEY(crew_id, planet_id, visitdate), FOREIGN KEY(crew_id) REFERENCES CrewMember(people_id), FOREIGN KEY(planet_id) REFERENCES Planet(planet_id));

