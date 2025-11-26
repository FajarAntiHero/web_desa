CREATE TABLE Product_table(
    id Char (50) Primary key,
    product_title varchar (255),
    product_description longtext,
    product_price bigint,
    product_shop char(50),
    product_reader bigint,
    product_likes bigint,
    product_comment char (50),
    product_link char (100),
    product_category int,

    FOREIGN KEY (product_shop) References product_shop(id),
    FOREIGN KEY (product_comment) References product_comment(id),
    FOREIGN KEY (product_category) References product_category(id)
);

