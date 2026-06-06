CREATE TABLE IF NOT EXISTS test_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL
);

INSERT INTO test_messages (message)
VALUES ('Testowa baza danych została poprawnie zainicjowana.');