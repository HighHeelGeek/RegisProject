CREATE TABLE Customers
(
    customer_id VARCHAR PRIMARY KEY identity(1,1),
    user_name VARCHAR(50),
    password VARCHAR(50),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone_number INT(9),
    email VARCHAR(50),
    address VARCHAR(50),
    city_zip VARCHAR(50)
)

CREATE TABLE Products
(
    products_id INT PRIMARY KEY IDENTITY(1,1),
    product_name VARCHAR (50),
    price FLOAT
)

CREATE TABLE Orders
(
    order_id INT PRIMARY KEY IDENTITY(1,1),
    customer_id VARCHAR (50),
    products_id VARCHAR (50),
    order_date DATETIME
)