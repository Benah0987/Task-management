CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'employee') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Admin User
INSERT INTO users (full_name, username, password, role) 
VALUES ('Admin User', 'admin', 'admin123', 'admin');

-- Insert Employee User
INSERT INTO users (full_name, username, password, role) 
VALUES ('Employee User', 'employee', 'employee123', 'employee');


   