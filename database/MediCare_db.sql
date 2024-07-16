CREATE DATABASE MediCare_db;
USE Medicare_db;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mob VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL,
    doctor VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL
);

INSERT INTO patients (name, mob, date, doctor, department) VALUES
('Andrew Richardson', '(555) 123-4567', '2023-09-06 10:00:00', 'Dr. Jennifer Roberts', 'Pediatrics'),
('Benjamin Thompson', '(555) 987-6543', '2023-08-06 10:30:00', 'Dr. Michael Sullivan', 'Cardiology');
