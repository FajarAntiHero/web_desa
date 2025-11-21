CREATE TABLE news (
id CHAR(10) PRIMARY KEY,
news_title VARCHAR(255) NOT NULL,
news_release_date DATE NOT NULL,
news_author VARCHAR(100) NOT NULL,
news_reader BIGINT DEFAULT 0,
news_likes BIGINT DEFAULT 0,
news_content LONGTEXT,
news_img_path VARCHAR(255),
news_comment CHAR(10) UNIQUE
);