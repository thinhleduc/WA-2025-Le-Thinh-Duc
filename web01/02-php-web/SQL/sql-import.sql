CREATE TABLE wa_test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_surname VARCHAR(50) NOT NULL,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    user_age INT DEFAULT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO wa_test (user_name, user_surname, user_email, user_age) VALUES
('Petr', 'Novák', 'petr.novak@example.com', 25),
('Zbyšek', 'Novák', 'zbysek.novak@example.com', 27),
('Jan', 'Jon', 'jan.jon@example.com', 21),
('Ping', 'Pong', 'ping.pong@example.com', 25);