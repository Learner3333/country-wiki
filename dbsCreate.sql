CREATE TABLE search_keywords (
    id INT AUTO_INCREMENT,
    keyword VARCHAR(255) NOT NULL,
    count INT DEFAULT 0,
    PRIMARY KEY (id, keyword)
);
