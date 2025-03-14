-- Create database
CREATE DATABASE IF NOT EXISTS enrollment_db;
USE enrollment_db;

-- Create learners table
CREATE TABLE IF NOT EXISTS learners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    school_year VARCHAR(20) NOT NULL,
    grade_level VARCHAR(20) NOT NULL,
    with_lrn TINYINT(1) DEFAULT 0,
    is_returning TINYINT(1) DEFAULT 0,
    last_name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    middle_initial VARCHAR(10),
    extension_name VARCHAR(20),
    birth_date DATE NOT NULL,
    birth_place VARCHAR(100) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    age INT NOT NULL,
    mother_tongue VARCHAR(50),
    house_no VARCHAR(20),
    street_name VARCHAR(100),
    barangay VARCHAR(100) NOT NULL,
    zipcode VARCHAR(20),
    municipality VARCHAR(100) NOT NULL,
    province VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create parents table
CREATE TABLE IF NOT EXISTS parents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    learner_id INT NOT NULL,
    relationship VARCHAR(20) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    middle_initial VARCHAR(10),
    phone_number VARCHAR(20),
    FOREIGN KEY (learner_id) REFERENCES learners(id) ON DELETE CASCADE
);