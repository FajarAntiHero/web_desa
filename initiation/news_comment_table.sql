CREATE TABLE news_comment (
    id CHAR(10) PRIMARY KEY,
    comment_time_send TIME NOT NULL,
    comment VARCHAR(500)
);