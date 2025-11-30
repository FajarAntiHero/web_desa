CREATE DATABASE product_database;
USE product_database;
CREATE TABLE product_table(
    id CHAR (10) PRIMARY KEY,
    product_title VARCHAR (500) NOT NULL,
    product_description LONGTEXT NOT NULL,
    product_price INT DEFAULT 0,
    product_shop VARCHAR(255) NOT NULL,
    product_reader INT DEFAULT 0,
    product_likes INT DEFAULT 0,
    category_id CHAR(10),
    
    FOREIGN KEY (category_id) REFERENCES product_category(id)
);

CREATE TABLE product_shop(
    id CHAR(5) PRIMARY KEY,
    shop_name VARCHAR (255) NOT NULL,
    shop_link VARCHAR (500) NOT NULL,
    shop_app VARCHAR (50) NOT NULL,
    product_id CHAR(10),
    FOREIGN KEY (product_id) REFERENCES product_table(id)
);

CREATE TABLE product_comment(
    id CHAR(15) PRIMARY KEY,
    comment_time_send TIME NOT NULL,
    comment_date_send DATE NOT NULL,
    comment_text LONGTEXT NOT NULL,
    product_id CHAR(10),
    FOREIGN KEY (product_id) REFERENCES product_table(id)
);

CREATE TABLE product_category(
    id CHAR(10) PRIMARY KEY,
    category_name varchar(50)
);
