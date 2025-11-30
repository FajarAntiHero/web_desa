CREATE DATABASE news_database;
USE news_database; 
CREATE TABLE news (
    id CHAR(10) PRIMARY KEY,
    news_title VARCHAR(255) NOT NULL,
    news_release_date DATE NOT NULL,
    news_author VARCHAR(100) NOT NULL,
    news_reader INT DEFAULT 0,
    news_likes INT DEFAULT 0,
    news_text LONGTEXT NOT NULL,
    news_img_path VARCHAR(255)
);

CREATE TABLE news_comment (
    id CHAR(10) PRIMARY KEY,
    comment_time_send TIME NOT NULL,
    comment_date_send DATE NOT NULL,
    comment_text LONGTEXT NOT NULL,
    news_id CHAR (10),

    FOREIGN KEY (news_id) REFERENCES news(id)
);