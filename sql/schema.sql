    CREATE TABLE designer_records (
    designer_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    email VARCHAR (50),
    designation VARCHAR (50),
    designtool VARCHAR (50),
    supervisor VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
